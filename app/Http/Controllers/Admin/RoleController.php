<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\OpdRequest;
use App\Traits\AuthorizableTrait;
use App\Role;
use App\Permission;

class RoleController extends Controller
{
    use AuthorizableTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::all();
        $permissions = Permission::all();
        return view('pages.admin.roles.index', compact('roles', 'permissions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.roles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $data = $request->all();

        // Role::create($data);
        // return redirect()->route('roles.index')->with(['success' => 'Berhasil menambahkan data.']);
        
        $this->validate($request, ['name' => 'required|unique:roles']);

        if( Role::create($request->only('name')) ) {
            with(['success' => 'Berhasil menambahkan data.']);
        }

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $role = Role::with(['permissions'])->findOrfail($id);

        return view('pages.admin.roles.detail', [
            'role' => $role
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $role = Role::findOrfail($id);

        // return view('pages.admin.roles.edit', [
        //     'role' => $role
        // ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {        
        if($role = Role::findOrFail($id)) {
            // superadmin role has everything
            if($role->name === 'Superadmin') {
                $role->syncPermissions(Permission::all());
                return redirect()->route('roles.index');
            }

            $permissions = $request->get('permissions', []);
            $role->syncPermissions($permissions);
            flash( $role->name . ' permissions has been updated.');
        } else {
            flash()->error( 'Role with id '. $id .' note found.');
        }

        return redirect()->route('roles.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $role = Role::findOrFail($id);
        $role->delete();

        return redirect()->route('roles.index')->with(['success' => 'Berhasil menghapus data.']);
    }
}
