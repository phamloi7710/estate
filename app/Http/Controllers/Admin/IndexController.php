<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
class IndexController extends Controller
{
    public function getIndex()
    {
    	
    	if(Auth::check())
        {
            $user = Auth::user();
            if($user->is_admin == 'true'){
                return view('admin.index');
            }else{
                $notifyError = array(
                    'message' => 'Bạn Không Có Quyển Truy Cập Trang Này!', 
                    'alert-type' => 'error',
                );
                return redirect()->back()->with($notifyError);
            }
        }else{
            return redirect()->route('getLoginAdmin');
        }
    }
}
