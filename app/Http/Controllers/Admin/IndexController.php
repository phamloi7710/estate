<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Model\News;
use App\Model\NewsCategory;
use App\Model\Contact;
use App\Model\DuAn;
use DB;
class IndexController extends Controller
{
 	function __construct()
    {
         $this->middleware('permission:image-management', ['only' => ['getFileManagement']]);
    }
    public function getIndex(){
	    $dataContact = Contact::all();
	    $dangtrienkhai = DuAn::where('danhmuc', 'Dự Án Đang Triển Khai')->get();
	    $datrienkhai = DuAn::where('danhmuc', 'Dự Án Đã Triển Khai')->get();
	    $news = News::all();
	    return view('admin.index', ['dataContact'=>$dataContact, 'dangtrienkhai'=>$dangtrienkhai, 'datrienkhai'=>$datrienkhai, 'news'=>$news])/*
	            ->with('views',json_encode($views,JSON_NUMERIC_CHECK))*/;
    	
    }
    public function getFileManagement()
    {
    	return view('admin.pages.imageManagement.index');
    }
}
