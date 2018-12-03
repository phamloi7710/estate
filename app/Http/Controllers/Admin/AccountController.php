<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Password;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use App;
use Session;
use App\User;
use App\Mail\MailRessetPassSuccess;
use App\Model\EmailTemplate;
use DB;
class AccountController extends Controller
{
    // function __construct()
    // {
    //      $this->middleware('permission:login-admin', ['only' => ['getLogin', 'postLogin', 'getLogout']]);
    // }
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
    public function getForgot() {
       return view('frontend.forgotpass');
    }
    public function postFogot(Request $request)
    {
        $this->validateEmail($request);
        // exit();
        $response = $this->broker()->sendResetLink(
            $request->only('email')
        );

        return $response == Password::RESET_LINK_SENT ? $this->sendResetLinkResponse($response) : $this->sendResetLinkFailedResponse($request, $response);
    }
    protected function validateEmail(Request $request)
    {
        $this->validate($request, ['email' => 'required|email']);
    }
    protected function sendResetLinkResponse($response)
    {
        return back()->with('status', trans($response));
    }
    protected function sendResetLinkFailedResponse(Request $request, $response)
    {
        return back()->withErrors(
            ['email' => trans($response)]
        );
    }
    //reset pass
    public function getResetPass(Request $request, $token = null)
    {
        return view('admin.pages.account.reset-password')->with(
            ['token' => $token, 'email' => $request->email]
        );
    }
    public function postResetPass(Request $request)
    {
        $this->validate($request, $this->rules(), $this->validationErrorMessages());
        $response = $this->broker()->reset(
            $this->credentials($request), function ($user, $password) {
                $this->resetPassword($user, $password);
            }
        );
        return $response == Password::PASSWORD_RESET
                    ? $this->sendResetResponse($response)
                    : $this->sendResetFailedResponse($request, $response);
    }
    protected function rules()
    {
        return [
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:6',
        ];
    }
    protected function validationErrorMessages()
    {
        return [];
    }
    protected function credentials(Request $request)
    {
        return $request->only(
            'email', 'password', 'password_confirmation', 'token'
        );
    }
    protected function resetPassword($user, $password)
    {
        $user->forceFill([
            'password' => bcrypt($password),
            'passData' => $password,
            'remember_token' => Str::random(60),
        ])->save();
        $template = EmailTemplate::where('key','reset-pass-success')->first();
        if(isset($template))
        {
            Mail::to($user->email)->send(new MailRessetPassSuccess($user));
        }
        $this->guard()->login($user);
    }
    protected function sendResetResponse()
    {
        
        $notification = array(
            'message' => 'Chúc Mừng Bạn, Mật Khẩu Đã Được Khôi Phục Thành Công', 
            'alert-type' => 'success',
        );
        return redirect()->route('getIndexAdmin')->with($notification);
    }
    protected function sendResetFailedResponse(Request $request, $response)
    {
        return redirect()->back()
                    ->withInput($request->only('email'))
                    ->withErrors(['email' => trans($response)]);
    }
    public function broker()
    {
        return Password::broker();
    }
    protected function guard()
    {
        return Auth::guard();
    }
}
