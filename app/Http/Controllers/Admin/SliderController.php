<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Slider;
class SliderController extends Controller
{
    public function getList()
    {
    	return view('admin.pages.slider.list');
    }
    public function getAdd()
    {
    	return view('admin.pages.slider.add');
    }
    public function postAdd(Request $request)
    {
    	$slider = new Slider();
    	$slider->title = $request->txtTitle;
    	$slider->url = $request->txtUrl;
    	$slider->image = $request->image;
    	$slider->status = $request->status;
    	$slider->save();
    	$notification = array(
            'message' => 'Thêm Mới Slider Thành Công!', 
            'alert-type' => 'success',
        );
        return redirect()->route('getListSliderAdmin')->with($notification);
    }
}
