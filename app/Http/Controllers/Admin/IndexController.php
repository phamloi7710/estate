<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function getIndex(){
    	
    	return view('admin.index');
    }
    public function getFileManagement()
    {
    	return view('admin.pages.imageManagement.index');
    }
}
