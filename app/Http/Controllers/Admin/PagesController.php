<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Page;
class PagesController extends Controller
{
    // public function getList()
    // {
    //     $pages = Page::all();
    // 	return view('admin.pages.pages.list',['pages'=>$pages]);
    // }
    // public function getAdd()
    // {
    //     return view('admin.pages.pages.add');
    // }
    // public function postAdd(Request $request)
    // {
    //     $page = new Page();
    //     $page->title = $request->txtTitle;
    //     $page->url = changeTitle($request->txtTitle);
    //     $page->content = $request->content;
    //     $page->status = $request->status;
    //     $seo_data = [
    //         'title' => $request->txtSeoTitle,
    //         'description' => $request->txtSeoDescription,
    //         'keywords' => $request->txtSeoKeywords,
    //     ];
    //     $page->seo_data = serialize($seo_data);
    //     $page->save();
    //     $notification = array(
    //         'message' => 'Thêm Mới Trang Con Thành Công!', 
    //         'alert-type' => 'success',
    //     );
    //     return redirect()->route('getListPageAdmin')->with($notification);

    // }
    // public function getEdit($id)
    // {
    //     $page = Page::find($id);
    //     $seo_data = unserialize($page->seo_data);
    //     return view('admin.pages.pages.edit',['page'=>$page,'seo_data'=>$seo_data]);
    // }
    // public function postEdit($id,Request $request)
    // {
    //     $page = Page::find($id);
    //     $page->title = $request->txtTitle;
    //     $page->url = changeTitle($request->txtTitle);
    //     $page->content = $request->content;
    //     $page->status = $request->status;
    //     $seo_data = [
    //         'title' => $request->txtSeoTitle,
    //         'description' => $request->txtSeoDescription,
    //         'keywords' => $request->txtSeoKeywords,
    //     ];
    //     $page->seo_data = serialize($seo_data);
    //     $page->save();
    //     $notification = array(
    //         'message' => 'Cập Nhật Trang Con Thành Công!', 
    //         'alert-type' => 'success',
    //     );
    //     return redirect()->route('getListPageAdmin')->with($notification);


    // }
    // public function getDelete($id)
    // {
    //     $pages = Pages::find($id);
    //     $pages->delete();
    //     return redirect()->route('getListPages')->with('thongbao',trans('general.deleteSuccessfully'));
    // }
    function __construct()
    {
         $this->middleware('permission:gioithieu', ['only' => ['gioithieu', 'postgioithieu']]);
         $this->middleware('permission:tuyendung', ['only' => ['tuyendung', 'posttuyendung']]);
    }
    public function gioithieu()
    {
        $gioithieu = Page::where('url', 'gioi-thieu.html')->first();
        return view('admin.pages.pages.gioithieu', ['gioithieu'=>$gioithieu]);
    }
    public function postgioithieu(Request $request)
    {
        $datagioithieu = Page::where('url', 'gioi-thieu.html')->first();
        if ($datagioithieu) {
            $gioithieu = Page::where('url', 'gioi-thieu.html')->first();
            $gioithieu->content = $request->content;
        }else{
            $gioithieu = new Page();
            $gioithieu->url = 'gioi-thieu.html';
            $gioithieu->content = $request->content;
        }
        $gioithieu->save();
        $notification = array(
            'message' => 'Cập Nhật Nội Dung Thành Công!', 
            'alert-type' => 'success',
        );
        return redirect()->back()->with($notification);
    }
    public function tuyendung()
    {
        $tuyendung = Page::where('url', 'tuyen-dung.html')->first();
        return view('admin.pages.pages.tuyendung', ['tuyendung'=>$tuyendung]);
    }
    public function posttuyendung(Request $request)
    {
        $datatuyendung = Page::where('url', 'tuyen-dung.html')->first();
        if ($datatuyendung) {
            $tuyendung = Page::where('url', 'tuyen-dung.html')->first();
            $tuyendung->content = $request->content;
        }else{
            $tuyendung = new Page();
            $tuyendung->url = 'tuyen-dung.html';
            $tuyendung->content = $request->content;
        }
        $tuyendung->save();
        $notification = array(
            'message' => 'Cập Nhật Nội Dung Thành Công!', 
            'alert-type' => 'success',
        );
        return redirect()->back()->with($notification);
    }
    public function lienhe()
    {
        $lienhe = Page::where('url', 'lien-he.html')->first();
        return view('admin.pages.pages.lienhe', ['lienhe'=>$lienhe]);
    }
    public function postlienhe(Request $request)
    {
        $datalienhe = Page::where('url', 'lien-he.html')->first();
        if ($datalienhe) {
            $lienhe = Page::where('url', 'lien-he.html')->first();
            $lienhe->content = $request->content;
        }else{
            $lienhe = new Page();
            $lienhe->url = 'lien-he.html';
            $lienhe->content = $request->content;
        }
        $lienhe->save();
        $notification = array(
            'message' => 'Cập Nhật Nội Dung Thành Công!', 
            'alert-type' => 'success',
        );
        return redirect()->back()->with($notification);
    }
}
