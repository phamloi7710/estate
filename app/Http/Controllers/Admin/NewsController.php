<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\News;
use App\Model\NewsCategory;
use DB;
class NewsController extends Controller
{
    public function getListCate()
    {
    	$category = NewsCategory::orderBy('order','ASC')->get();
    	return view('admin.pages.news.cate.list', ['category'=>$category]);
    }
    public function postAddCate(Request $request)
    {
        $category = new NewsCategory;
        $category->name = $request->txtCategoryName;
        $category->slug = changeTitle($request->txtCategoryName);
        $category->status = $request->status;
        $category->save();
        $notification = array(
            'message' => 'Thêm Mới Danh Mục Tin Tức Thành Công!', 
            'alert-type' => 'success',
        );
        return redirect()->back()->with($notification);
    }
    public function postEditCate(Request $request, $id)
    {
        $category = NewsCategory::find($id);
        $category->name = $request->txtCategoryName;
        $category->slug = changeTitle($request->txtCategoryName);
        $category->status = $request->status;
        $category->save();
        $notification = array(
            'message' => 'Cập Nhật Danh Mục Tin Tức Thành Công!', 
            'alert-type' => 'success',
        );
        return redirect()->back()->with($notification);
    }
    public function deleteCate($id)
    {
        $news = News::where('cate_id', $id)->count();
        if ($news==0) {
            $category = NewsCategory::find($id);
            $category->delete();
            $notification = array(
                'message' => 'Xoá Danh Mục Tin Tức Thành Công!', 
                'alert-type' => 'success',
            );
            return redirect()->back()->with($notification);
        }
        else{
            $notification = array(
                'message' => 'Danh Mục Này Đang Chứa Tin Tức!', 
                'alert-type' => 'error',
            );
            return redirect()->back()->with($notification);
        }
    }
    public function getList()
    {
        $news = News::all();
        $category = array();
        foreach($news as $key=>$value)
        {
            $category[$value->cate_id] = $value;
        }
        return view('admin.pages.news.list', ['news'=>$news, 'category'=>$category]);
    }
    public function getAdd()
    {
        $category = NewsCategory::where('status', 'active')->get();
        return view('admin.pages.news.add', ['category'=>$category]);
    }
    public function postAdd(Request $request)
    {
        $news = new News();
        $news->title = $request->txtTitle;
        $news->slug = changeTitle($request->txtTitle);
        $news->image = $request->image;
        $news->cate_id = $request->sltCategory;
        $news->tomtat = $request->tomtat;
        $news->content = $request->content;
        $news->status = $request->status;
        $news->order = $request->txtOrder;
        $news->seoTitle = $request->txtSeoTitle;
        $news->seoDescription = $request->txtSeoDescription;
        $news->seoKeyWorks = $request->txtSeoKeywords;
        $news->save();
        $notification = array(
            'message' => 'Thêm Mới Tin Tức Thành Công!', 
            'alert-type' => 'success',
        );
        return redirect()->route('getListNews')->with($notification);
    }
    public function getEdit($id)
    {
        $news = News::find($id);
        $category = NewsCategory::where('status', 'active')->get();
        return view('admin.pages.news.edit', ['news'=>$news, 'category'=>$category]);
    }
    public function postEdit(Request $request,$id)
    {
        $news = News::find($id);
        $news->title = $request->txtTitle;
        $news->slug = changeTitle($request->txtTitle);
        $news->image = $request->image;
        $news->cate_id = $request->sltCategory;
        $news->tomtat = $request->tomtat;
        $news->content = $request->content;
        $news->status = $request->status;
        $news->order = $request->txtOrder;
        $news->seoTitle = $request->txtSeoTitle;
        $news->seoDescription = $request->txtSeoDescription;
        $news->seoKeyWorks = $request->txtSeoKeywords;
        $news->save();
        $notification = array(
            'message' => 'Cập Nhật Tin Tức Thành Công!', 
            'alert-type' => 'success',
        );
        return redirect()->route('getListNews')->with($notification);
    }
    public function delete($id)
    {
        $news = News::find($id);
        $news->delete();
        $notification = array(
            'message' => 'Xoá Tin Tức Thành Công!', 
            'alert-type' => 'success',
        );
        return redirect()->route('getListNews')->with($notification);
    }
}
