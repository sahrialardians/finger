<?php

namespace App\Http\Controllers\Admin;

use App\Role;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\OpdRequest;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::all();
        return view('pages.admin.roles.index', compact('roles'));
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
    public function store(OpdRequest $request)
    {
        $data = $request->all();

        Role::create($data);
        return redirect()->route('roles.index')->with(['success' => 'Berhasil menambahkan data.']);
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
        $role = Role::findOrfail($id);

        return view('pages.admin.roles.edit', [
            'role' => $role
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(OpdRequest $request, $id)
    {
        $data = $request->all();

        $role = Role::findOrFail($id);
        $role->update($data);
        
        return redirect()->route('roles.index')->with(['success' => 'Berhasil mengubah data.']);
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
