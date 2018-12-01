<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Session;
use App\User;
class AccountController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:login-admin', ['only' => ['getLogin', 'postLogin', 'getLogout']]);
    }
    public function getLogin(){
        
    	if (Auth::check()) {
            return redirect()->route('getIndexAdmin');
        }else{
            return view('admin.pages.account.login');
        }
    }
    public function postLogin(Request $request){
		$data = [
            'username' => $request->txtUsername,
            'password' => $request->txtPassword,
        ];
    	if(Auth::attempt($data)){
            $notifySuccess = array(
                'message' => 'Đăng Nhập Thành Công',  
                'alert-type' => 'success',
            );
    		return redirect()->route('getIndexAdmin')->with($notifySuccess);
    	}
    	else{
    		$notifyError = array(
                'message' => 'Đăng Nhập Không Thành Công', 
                'alert-type' => 'error',
            );
    		return redirect()->back()->with($notifyError);;
    	}
    }
    public function getLogout() {
       Auth::logout();
       Session::flush();
       return redirect()->route('getLoginAdmin');
    }
}
