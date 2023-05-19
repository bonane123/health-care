<?php

namespace App\Http\Controllers;

use App\Models\User;
use Spatie\Permission\Models\Permission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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

    public function EditPermission($id)
    {
        $permission = Permission::findOrFail($id);
        return view('backend.pages.permission.edit_permission', compact('permission'));
    }

    public function UpdatePermission(Request $request)
    {
        $permission = Permission::findOrFail($request->id);
        $permission->name = $request->name;
        $permission->group_name = $request->group_name;
        $permission->save();
        
        return redirect('dashboard/pages/permission');
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

      public function StoreRolePermission(Request $request)
    {

        $data = array();
        $permissions = $request->permission;

        foreach ($permissions as $key => $item) {
            $data['role_id'] = $request->role_id;
            $data['permission_id'] = $item;

            DB::table('role_has_permissions')->insert($data);
        }


        return redirect('/dashboard/pages/role/permission');
}
public function EditRolePermission($id)
    {

        $role = Role::findOrFail($id);
        $permissions = Permission::all();
        $permission_groups = User::getPermissionGroup();

        return view('backend.pages.role.edit_role_permission', compact('role', 'permissions', 'permission_groups'));
    }

    public function UpdateRolePermissions(Request $request, $id)
    {
        $role = Role::findOrFail($id);
        $permissions = $request->permission;
        if (!empty($permissions)) {
            $role->syncPermissions($permissions);
        }
        

        return redirect()->route('dashboard.pages.role.permission.all');
    }
}
