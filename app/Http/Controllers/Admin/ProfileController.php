<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Hash;
use Session;
use App\Mail\ChangePassword;
use App\Model\EmailTemplate;
use Illuminate\Support\Facades\Mail;
use Auth;
class ProfileController extends Controller
{
    public function getDetail($username)
    {
    	$user = User::where('username', $username)->first();
    	return view('admin.pages.profile.detail', ['user'=>$user]);
    }
    public function postDetail(Request $request, $username)
    {
    	$user = User::where('username', $username)->first();
    	$user->name = $request->txtFullName;
        $user->avatar = $request->avatar;
		$user->phone = $request->txtPhone;
        $user->address = $request->txtAddress;
		$user->is_admin = 'true';
		$user->save();
		$notification = array(
            'message' => __("Cập Nhật Thông Tin Thành Công"), 
            'alert-type' => 'success',
        );
        return redirect()->back()->with($notification);
    }
    public function postChangePassword(Request $request, $username)
    {
    	$user = User::where('username', $username)->first();
    	if (!Hash::check($request->oldPass, $user->password)) 
    	{
            $notification = array(
	            'message' => __("Mật Khẩu Cũ Không Chính Xác."), 
	            'alert-type' => 'error',
	        );
	        return redirect()->back()->with($notification);
        } 
        else 
        {
        	$passData = $request->reNewPass;
        	$user->passData = $passData;
        	$user->password = bcrypt($passData);
            Session::flash('success', 'Mật khẩu mới đã được gửi đến Email của bạn.');
            $user->save();
            $template = EmailTemplate::where('key','changed-password')->first();
	        if(isset($template))
	        {
	            Mail::to(Auth::user()->email)->send(new ChangePassword($user));
	        }
            $notification = array(
	            'message' => __("Thay Đổi Mật Khẩu Thành Công."), 
	            'alert-type' => 'success',
	        );
	        return redirect()->back()->with($notification);
        }
    	
    }
}
