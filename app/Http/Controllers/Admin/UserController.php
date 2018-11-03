<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Spatie\Permission\Models\Role;
class UserController extends Controller
{
    public function getList()
    {
         $roles = Role::all();
         $users = User::all();
    	return view('admin.pages.user.list',['users'=>$users, 'roles'=>$roles]);
    }
    public function getAdd()
    {
        $roles = Role::all();
    	return view('admin.pages.user.add',['users'=>$users, 'group'=>$group, 'roles'=>$roles]);
    }
    public function postAdd(Request $request)
    {
    	$user = new User();
        $user->first_name = $request->txtFirstName;
        $user->last_name = $request->txtLastName;
        $user->avatar = $request->avatar;
        $user->email = $request->txtEmail;
        $user->username = $request->txtUserName;
        $user->password = bcrypt($request->txtPassword);
        $user->phone = $request->txtPhone;
        $user->address = $request->txtAddress;
        $user->is_admin = 'true';
        $user->save();
        $user->assignRole($request->input('roles'));
        $notification = array(
                'message' => __("Thêm Mới Thành Viên Thành Công"), 
                'alert-type' => 'success',
            );
        return redirect()->back()->with($notification);
    }
    public function getEdit()
    {
    	
    }
    public function postEdit()
    {
    	
    }
    public function deleteUser()
    {
    	
    }
}
