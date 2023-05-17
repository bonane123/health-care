<?php

namespace App\Http\Controllers;

use App\Models\User;
use Spatie\Permission\Models\Permission;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function AllPermissions(){
        
        $permissions = Permission::all();
        return view('backend.pages.permission.all_permissions', compact('permissions'));
    }

    public function AddPermissions(Request $request)
    {
        $permission = Permission::create([
            'name' => $request->name,
            'group_name' => $request->group_name,
        ]);
        return redirect()->back();
    }

        public function AllRoles()
    {
        $roles = Role::all();
        return view('backend.pages.role.all_roles', compact('roles'));
    }
    public function AddRole(Request $request)
    {
        $role = Role::create([
            'name' => $request->name,
        ]);
        return redirect()->back();
    }

     public function AllRolePermission()
    {
        $roles = Role::all();
        return view('backend.pages.role.all_roles_permission', compact('roles'));
    }

      public function AddRolePermission(Request $request)
    {
        $roles = Role::all();
        $permissions = Permission::all();
        $permission_groups = User::getPermissionGroup();
        return view('backend.pages.role.role_permissions', compact('roles', 'permissions', 'permission_groups'));
        return redirect()->back();
    }
}
