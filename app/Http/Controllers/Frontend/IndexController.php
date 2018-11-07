<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Slider;
use App\Model\News;
class IndexController extends Controller
{
    public function getIndex()
    {
    	$slider = Slider::where('status', 'active')->get();
    	$news = News::where('status', 'active')->orderBy('created_at', 'DESC')->limit(10)->get();
    	return view('frontend.index', ['slider'=>$slider, 'news'=>$news]);
    }
}
