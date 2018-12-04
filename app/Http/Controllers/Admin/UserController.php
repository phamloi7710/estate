<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Spatie\Permission\Models\Role;
use App\Mail\MailNewUser;
use App\Model\EmailTemplate;
use Illuminate\Support\Facades\Mail;
use DB;
use Auth;
class UserController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:user-list', ['only' => ['getList']]);
        $this->middleware('permission:user-add', ['only' => ['getAdd', 'postAdd']]);
        $this->middleware('permission:user-edit', ['only' => ['getEdit', 'postEdit']]);
        $this->middleware('permission:user-delete', ['only' => ['deleteUser']]);
    }
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
    public function getEdit($id)
    {
        $user = User::find($id);
        $roles = Role::all();
        $userRole = $user->roles;
        // dd($userRole);exit();
        return view('admin.pages.user.edit', ['user'=>$user, 'roles'=>$roles, 'userRole'=>$userRole]);
    }
    public function postEdit(Request $request, $id)
    {
    	$user = User::find($id);
        $user->name = $request->txtFullName;
        $user->avatar = $request->avatar;
        $user->email = $request->txtEmail;
        $user->username = $request->txtUserName;
        $user->phone = $request->txtPhone;
        $user->address = $request->txtAddress;
        $user->is_admin = 'true';
        $user->save();
        if(Auth::user()->id==$user->id || $user->id=='1'){

        }else{
            DB::table('model_has_roles')->where('model_id',$id)->delete();
            $user->assignRole($request->input('roles'));
        }
         // DB::table('model_has_roles')->where('model_id',$id)->delete();
         //    $user->assignRole($request->input('roles'));
        $notification = array(
            'message' => __("Chỉnh Sửa Thành Viên Thành Công"), 
            'alert-type' => 'success',
        );
        return redirect()->route('getListUsers')->with($notification);
    }
    public function deleteUser($id)
    {
        $user = User::find($id);
        if ($user->id=='1') {
                $notification = array(
                'message' => __("Không Thể Xóa Tài Khoản Này"), 
                'alert-type' => 'error',
            );
            return redirect()->back()->with($notification);
        }else{
            DB::table('model_has_roles')->where('model_id',$id)->delete();
            $user->delete();
            $notification = array(
                'message' => __("Xóa Thành Viên Thành Công"), 
                'alert-type' => 'success',
            );
            return redirect()->back()->with($notification);
        }
    }
}
