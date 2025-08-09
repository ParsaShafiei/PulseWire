<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateUserRequest;
use App\Models\Permission;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        // dd($users);
        return view('admin.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function edit(User $user)
    {
        $permissions = Permission::all();
        return view('admin.user.edit', compact('user', 'permissions'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        $inputs = $request->validated();
        // $inputs['permission_id'] = $request->permission;
        // dd($inputs);

        $user->update([
            'name' => $inputs['name'],
            'email' => $inputs['email'],
            'permission_id' => $inputs['permission_id']
        ]);
        return to_route('admin.user.index')->with('swal-success', 'User Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $result = $user->delete();
        return to_route('admin.user.index')->with('swal-success', 'User Deleted');
    }

    public function changePermission(User $user)
    {
        if ($user->is_admin == 1) {
            $user->permission_id = 0;
        } else {
            $user->permission_id = 1;
        }
        $user->save();
        return to_route('admin.user.index')->with('swal-success', 'Status Has Been Cahnged');
    }
}