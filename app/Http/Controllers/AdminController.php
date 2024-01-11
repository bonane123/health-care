<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class AdminController extends Controller
{
    public function AdminDashboard()
    {
        $userData = User::all();
        return view('backend.pages.dashboard', compact('userData'));
    }

    public function AdminLogout(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function AdminProfile()
    {
        $id = Auth::user()->id;
        $adminData = User::find($id);
        return view('backend.pages.edit_profile', compact('adminData'));
    }

    public function AdminProfileStore(Request $request)
    {

        $id = Auth::user()->id;
        $data = User::find($id);
        $data->username = $request->username;
        $data->phone = $request->phone;

        if ($request->file('photo')) {
            $file = $request->file('photo');
            @unlink(public_path('upload/admin_images/' . $data->photo));
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/admin_images'), $filename);
            $data['photo'] = $filename;
        }

        $data->save();
        $notification = array(
            'message' => 'Admin Profile Updated Successfully',
            'alert-type' => 'success',
        );

        return redirect()->back()->with($notification);
    } // End Method 

    public function AllUsers()
    {
        $users = User::latest()->get();
        return view('backend.pages.users.all_users', compact('users'));
    }

    public function AddUser()
    {
        $roles = Role::all();
        return view('backend.pages.users.add_user', compact('roles'));
    }

    public function StoreUser(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = Hash::make($request->password);
        $user->save();

        if ($request->roles) {
            $user->assignRole($request->roles);
        }


        return redirect()->route('all.users');
    }

    public function EditUser($id)
    {
        $roles = Role::all();
        $userData = User::findOrFail($id);

        return view('backend.pages.users.edit_user', compact('userData', 'roles'));
    }

    public function UpdateUser(Request $request)
    {
        // dd($request->gender);
        $admin_id = $request->id;

        $user = User::findOrFail($admin_id);
        $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->save();
        $user->roles()->detach();
        if ($request->roles) {
            $user->assignRole($request->roles);
        }

        return redirect()->route('all.users');
    }

    public function UndeleteUser($id)
    {
        // dd($id);
        $user = User::findOrFail($id);
        $user->status = 'active';
        $user->save();
        return redirect()->route('all.users');
    }

    public function DeleteUser($id)
    {
        $user = User::findOrFail($id);
        $user->status = 'inactive';
        $user->save();


        return redirect()->route('all.users');
    }

    public function AllCourse()
    {
        return view('backend.pages.course.all_course');
    }
    public function AddCourse()
    {
        return view('backend.pages.course.add_course');
    }
}
