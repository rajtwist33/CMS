<?php

namespace App\Http\Controllers\backend\usermanagement;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\backend\Companysetting;
use Spatie\Permission\Models\Permission;


class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }


    public function create()
    {
        $setting = Companysetting::with('link')->first();
        $permissions = Permission::latest()->get();
        return view('Backend.usermanagement.permissions.creat',compact('setting','permissions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       Permission::updateOrCreate(
        [
            'id'=>$request->data_id
        ],
        ['name' => $request->permission]
    );
       return redirect()->route('admin.permission.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $permission)
    {
        $setting = Companysetting::with('link')->first();
        $permissions = Permission::latest()->get();
        $edit = Permission::where('id',$permission)->first();
        return view('Backend.usermanagement.permissions.creat',compact('setting','permissions','edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
