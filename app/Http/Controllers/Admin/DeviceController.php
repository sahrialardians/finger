<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\DeviceRequest;
use App\Device;

class DeviceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $devices = Device::all();
        return view('pages.admin.devices.index', compact('devices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.devices.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DeviceRequest $request)
    {
        $data = $request->all();

        Device::create($data);
        return redirect()->route('devices.index')->with(['success' => 'Berhasil menambahkan data.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DeviceRequest $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function pingAddress($ipAddress)
    {
        $ipAddress="8.8.8.8";
        $output=shell_exec('ping -n 1 '.$ipAddress);

        echo "<pre>$output</pre>"; //for viewing the ping result, if not need it just remove it

        if (strpos('out') !== false) {
            echo "<span class='badge badge-pill badge-danger'>Disconnect</span>";
        }
            elseif(strpos('expired') !== false)
        {
            echo "Network Error";
        }
            elseif(strpos('data') !== false)
        {
            echo "<span class='badge badge-pill badge-success'>Connected</span>";
        }
        else
        {
            echo "Unknown Error";
        }
    }
}
