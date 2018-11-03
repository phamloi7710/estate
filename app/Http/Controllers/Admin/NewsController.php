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
        $category->parent_id = $request->sltparentCategory;
        $category->status = $request->status;
        $category->status_home = $request->statusHome;
        $category->note = $request->note;
        $category->save();
        $notification = array(
            'message' => 'Thêm Mới Danh Mục Tin Tức Thành Công!', 
            'alert-type' => 'success',
        );
        return redirect()->back()->with($notification);
    }
    public function postEditCate(Request $request, $slug)
    {
        $category = NewsCategory::where('slug', $slug)->first();
        $category->name = $request->txtCategoryName;
        $category->slug = changeTitle($request->txtCategoryName);
        $category->parent_id = $request->sltparentCategory;
        if($request->sltparentCategory==$category->id){
            echo "Lỗi Mẹ Rồi";
            exit();
        }
        $category->status = $request->status;
        $category->status_home = $request->statusHome;
        $category->note = $request->note;
        $category->save();
        $notification = array(
            'message' => 'Cập Nhật Danh Mục Tin Tức Thành Công!', 
            'alert-type' => 'success',
        );
        return redirect()->back()->with($notification);
    }
    public function postUpdateSort(Request $request)
    {
        $category = NewsCategory::orderBy('order','ASC')->get();
        $itemID = $request->itemID;
        $itemIndex = $request->itemIndex;
        foreach ($category as $value) {
            return DB::table('news_category')->where('id', $itemID)->update(array('order'=>$itemIndex));
        }
    }
    public function getList()
    {
        return view('admin.pages.news.list');
    }
    public function getAdd()
    {
        $category = NewsCategory::all();
        return view('admin.pages.news.add', ['category'=>$category]);
    }
}
