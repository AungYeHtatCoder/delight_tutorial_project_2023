<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\Permission;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   public function index()
    {
        $roles = Role::all();
        return view('admin.roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $permissions = Permission::all()->pluck('title', 'id');
        return response()->view('admin.roles.create', compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $request->validate([
            'title' => 'required|unique:roles,title'
        ]);
         $role = Role::create($request->all());
        $role->permissions()->sync($request->input('permissions', []));
        // redirect
        return redirect()->route('admin.roles.index')->with('toast_success', 'Role created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Role $role)
    {
    $role_detail = $role; // Remove the unnecessary find() method
    $permissions = Permission::all();
    return response()->view('admin.roles.show', compact('role_detail', 'permissions'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $role = Role::find($id);
        $permissions = Permission::all()->pluck('title', 'id');
        return view('admin.roles.edit', compact('role', 'permissions'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Role $role)
    {
        $role->update($request->all());
        $role->permissions()->sync($request->input('permissions', []));
         return redirect()->route('admin.roles.index')->with('toast_success', 'Role updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role)
    {
         // delete
        //$role = Role::find($role);
        $role->delete();
        // redirect
        return redirect()->route('admin.roles.index')->with('toast_success', 'Role deleted successfully.');
    }
}