<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Page;
class PagesController extends Controller
{
    public function getPage($url)
    {
    	$page = Page::where('url', $url)->first();
    	return view('frontend.pages.pages.page', ['page'=>$page]);
    }
}
