<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Slider;
class IndexController extends Controller
{
    public function getIndex()
    {
    	$slider = Slider::where('status', 'active')->get();
    	return view('frontend.index', ['slider'=>$slider]);
    }
}
