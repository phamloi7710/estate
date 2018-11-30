<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Spatie\Permission\Models\Role;
use App\Mail\MailNewUser;
use App\Model\EmailTemplate;
use Illuminate\Support\Facades\Mail;
class UserController extends Controller
{
    public function getList()
    {
         $users = User::all();
    	return view('admin.pages.user.list',['users'=>$users]);
    }
    public function getAdd()
    {
        $roles = Role::all();
    	return view('admin.pages.user.add',['roles'=>$roles]);
    }
    public function postAdd(Request $request)
    {
    	$user = new User();
        $user->name = $request->txtFullName;
        $user->avatar = $request->avatar;
        $user->email = $request->txtEmail;
        $user->username = $request->txtUserName;
        $passData = 'osimi-'.rand(10000000,99999999);
        $user->passData = $passData;
        $user->password = bcrypt($passData);
        $user->phone = $request->txtPhone;
        $user->address = $request->txtAddress;
        $user->is_admin = 'true';
        $user->save();
        $user->assignRole($request->input('roles'));
        $template = EmailTemplate::where('key','new-user')->first();
        if(isset($template))
        {
            Mail::to($request->txtEmail)->send(new MailNewUser($user));
        }
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
