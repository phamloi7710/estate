<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Page;
use App\Model\NewsCategory;
class FrontendController extends Controller
{
    public function __construct()
    {
        $newsCate = NewsCategory::where('status', 'active')->get();
        view()->share('newsCate', $newsCate);
    }
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
        $gioithieu = Page::where('url', 'gioi-thieu.html')->first();
        return view('frontend.pages.gioithieu', ['gioithieu'=>$gioithieu]);
    }
    public function dangnhap()
    {
        return view('frontend.pages.dangnhap');
    }
    public function dangky()
    {
        return view('frontend.pages.dangky');
    }
    public function tuyendung()
    {
        $tuyendung = Page::where('url', 'tuyen-dung.html')->first();
        return view('frontend.pages.tuyendung', ['tuyendung'=>$tuyendung]);
    }
}
