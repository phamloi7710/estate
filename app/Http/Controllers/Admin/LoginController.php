<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Session;
use App\User;
class LoginController extends Controller
{
    public function getLogin(){
        
    	if (Auth::check()) {
            return redirect()->route('getIndexAdmin');
        }else{
            return view('admin.login');
        }
    }
    public function postLogin(Request $request){
		$data = [
            'username' => $request->txtUsername,
            'password' => $request->txtPassword,
        ];
    	if(Auth::attempt($data)){
            $notifySuccess = array(
                'message' => __('notify.loginSuccessfully'),  
                'alert-type' => 'success',
            );
    		return redirect()->route('getIndexAdmin')->with($notifySuccess);
    	}
    	else{
    		$notifyError = array(
                'message' => __('notify.loginError'), 
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
