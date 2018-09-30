<?php

namespace App\Http\Controllers;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Role::create(['name'=>'writer']);
        // $permission = Permission::create(['name'=>'edit post']);
        $role = Role::findById(1);
        $permission = Permission::findById(1);
        // $role->givePermissionTo($permission);
        // $permission->removeRole($role);
        $role->revokePermissionTo($permission);
        return view('home');
    }
}
