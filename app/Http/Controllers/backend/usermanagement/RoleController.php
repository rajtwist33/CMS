<?php

namespace App\Http\Controllers\backend\usermanagement;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\backend\Companysetting;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $setting = Companysetting::with('link')->first();
        $roles = Role::get();
        return view('Backend.usermanagement.roles.index',compact('setting','roles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $setting = Companysetting::with('link')->first();
        $roles = Role::get();
        $permissions = Permission::latest()->get();
        return view('Backend.usermanagement.roles.create',compact('setting','roles','permissions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $role = Role::updateOrCreate(
            [
                'id'=>$request->data_id
            ],
            ['name' => $request->role]
        );
        $role->syncPermissions($request->permission);

           return redirect()->route('admin.roles.create');
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
    public function edit(string $id)
    {
        //
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
