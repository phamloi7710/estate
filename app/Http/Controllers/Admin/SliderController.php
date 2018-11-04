<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Slider;
class SliderController extends Controller
{
    public function getList()
    {
        $slider = Slider::all();
    	return view('admin.pages.slider.list', ['slider'=>$slider]);
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
    public function getEdit($id)
    {
        $slider = Slider::find($id);
        return view('admin.pages.slider.edit', ['slider'=> $slider]);
    }
    public function postEdit(Request $request, $id)
    {
        $slider = Slider::find($id);
        $slider->title = $request->txtTitle;
        $slider->url = $request->txtUrl;
        $slider->image = $request->image;
        $slider->status = $request->status;
        $slider->save();
        $notification = array(
            'message' => 'Cập Nhật Slider Thành Công!', 
            'alert-type' => 'success',
        );
        return redirect()->route('getListSliderAdmin')->with($notification);
    }
    public function delete($id)
    {
        $slider = Slider::find($id);
        $slider->delete();
        $notification = array(
            'message' => 'Xoá Slider Thành Công!', 
            'alert-type' => 'success',
        );
        return redirect()->route('getListSliderAdmin')->with($notification);
    }
}
