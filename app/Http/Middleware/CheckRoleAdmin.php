<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
class CheckRoleAdmin
{
    public function handle($request, Closure $next)
    {
        if(Auth::check())
        {
            $user = Auth::user();
            if($user->is_admin == 'true'){
                return $next($request);
            }else{
                $notifyError = array(
                    'message' => __('notify.roleLoginError'), 
                    'alert-type' => 'error',
                );
                return redirect()->back()->with($notifyError);
            }
        }else{
            return redirect()->route('getLoginAdmin');
        }
    }
}
