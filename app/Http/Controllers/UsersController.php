<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use App\Models\Permission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         // users data with order by id desc
        $users = User::orderBy('id', 'desc')->with('roles')->get();
        return response()->view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles = Role::all()->pluck('title', 'id');
        return response()->view('admin.users.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        // assign role to user
        $user->roles()->sync($request->input('roles', []));
        return redirect()->route('admin.users.index')->with('success', 'User created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    $user_detail = User::with(['roles', 'roles.permissions'])->findOrFail($id);
    $roles = Role::all();
    $permissions = Permission::all();
    return view('admin.users.show', compact('user_detail', 'roles', 'permissions'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
         $user_edit = User::find($id);
        $roles = Role::all()->pluck('title', 'id');
        return response()->view('admin.users.edit', compact('user_edit', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::find($id);
        $user->update($request->all());
        $user->roles()->sync($request->input('roles', []));
        return redirect()->route('admin.users.index', $user->id)->with('success', 'User updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         $user = User::find($id);
        $user->delete();
        return redirect()->route('admin.users.index')->with('success', 'User deleted successfully');
    }
}