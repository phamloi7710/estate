<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Page;
class PagesController extends Controller
{
    public function getList()
    {
        $pages = Page::all();
    	return view('admin.pages.pages.list',['pages'=>$pages]);
    }
    public function getAdd()
    {
        return view('admin.pages.pages.add');
    }
    public function postAdd(Request $request)
    {
        $page = new Page();
        $page->title = $request->txtTitle;
        $page->url = changeTitle($request->txtTitle);
        $page->content = $request->content;
        $page->status = $request->status;
        $seo_data = [
            'title' => $request->txtSeoTitle,
            'description' => $request->txtSeoDescription,
            'keywords' => $request->txtSeoKeywords,
        ];
        $page->seo_data = serialize($seo_data);
        $page->save();
        $notification = array(
            'message' => 'Thêm Mới Trang Con Thành Công!', 
            'alert-type' => 'success',
        );
        return redirect()->route('getListPageAdmin')->with($notification);

    }
    public function getEdit($id)
    {
        $page = Page::find($id);
        $seo_data = unserialize($page->seo_data);
        return view('admin.pages.pages.edit',['page'=>$page,'seo_data'=>$seo_data]);
    }
    public function postEdit($id,Request $request)
    {
        $page = Page::find($id);
        $page->title = $request->txtTitle;
        $page->url = changeTitle($request->txtTitle);
        $page->content = $request->content;
        $page->status = $request->status;
        $seo_data = [
            'title' => $request->txtSeoTitle,
            'description' => $request->txtSeoDescription,
            'keywords' => $request->txtSeoKeywords,
        ];
        $page->seo_data = serialize($seo_data);
        $page->save();
        $notification = array(
            'message' => 'Cập Nhật Trang Con Thành Công!', 
            'alert-type' => 'success',
        );
        return redirect()->route('getListPageAdmin')->with($notification);


    }
    public function getDelete($id)
    {
        $pages = Pages::find($id);
        $pages->delete();
        return redirect()->route('getListPages')->with('thongbao',trans('general.deleteSuccessfully'));
    }
}
