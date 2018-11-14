<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Page;
use App\Model\DuAn;
use App\Model\News;
use App\Model\NewsCategory;
class PagesController extends Controller
{
    public function getPage($url)
    {
    	$page = Page::where('url', $url)->first();
    	return view('frontend.pages.pages.page', ['page'=>$page]);
    }
    public function getChiTietDuAn($url)
    {
    	$duan = DuAn::where('url', $url)->first();
    	$imageData = unserialize($duan->hinhanh);
    	$videoData = unserialize($duan->video);
    	return view('frontend.pages.duan.chitiet', ['duan'=>$duan, 'imageData'=>$imageData, 'videoData'=>$videoData]);
    }
    public function getDuAnDangTrienKhai()
    {
    	$duan = DuAn::where('danhmuc', 'Dự Án Đang Triển Khai')->orderBy('order', 'ASC');
    	$duan = $duan->paginate(10)->setPath('');
    	return view('frontend.pages.duan.duandangtrienkhai', ['duan'=>$duan]);
    }
    public function getDuAnDaTrienKhai()
    {
    	$duan = DuAn::where('danhmuc', 'Dự Án Đã Triển Khai');
    	$duan = $duan->paginate(10)->setPath('');
    	return view('frontend.pages.duan.duandatrienkhai', ['duan'=>$duan]);
    }
    public function getDanhMucTinTuc($slug)
    {
        $category = NewsCategory::where('status', 'active')->get();
        $cateNews = NewsCategory::where('slug', $slug)->first();
        $news = News::where('cate_id', $cateNews->id)->orderBy('order', 'ASC');
        $news = $news->paginate(10)->setPath('');
        return view('frontend.pages.news.category.list', ['category'=>$category, 'news'=>$news, 'cateNews'=>$cateNews]);
    }
    public function getChiTietTinTuc($url)
    {
        $news = News::where('slug', $url)->first();
        $category = NewsCategory::where('status', 'active')->get();
        $cungchude = News::where('cate_id', $news->cate_id)->get();
        return view('frontend.pages.news.detail', ['news'=>$news, 'category'=>$category, 'cungchude'=>$cungchude]);
    }
    public function getPages($url)
    {
        $page = Page::where('url',$url)->first();
        $newsCate = NewsCategory::where('status', 'active')->get();
        return view('frontend.pages.page',['page'=>$page, 'newsCate'=>$newsCate]);
    }
}
