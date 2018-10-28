<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontendController extends Controller
{
    public function getLienHe()
    {
    	return view('frontend.pages.lienhe');
    }
    public function getChiTietDuAn()
    {
    	return view('frontend.pages.chitietduan');
    }
    public function getDuAn()
    {
    	return view('frontend.pages.danhsachduan');
    }
    public function getDanhMucTinTuc()
    {
    	return view('frontend.pages.danhmuctintuc');
    }
    public function getChiTietTinTuc()
    {
        return view('frontend.pages.chitiettintuc');
    }
    public function getGioiThieu()
    {
        return view('frontend.pages.gioithieu');
    }
    public function dangnhap()
    {
        return view('frontend.pages.dangnhap');
    }
    public function dangky()
    {
        return view('frontend.pages.dangky');
    }
}
