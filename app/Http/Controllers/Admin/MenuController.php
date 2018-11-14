<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Menu;
use App\Model\Page;
use Validator;
use App\Http\Requests\menu\AddMenuRequest;
class MenuController extends Controller
{
    public function getList()
    {
    	$menu = Menu::all();
    	$pages = Page::all();
    	return view('admin.pages.menu.list', ['menu'=>$menu, 'pages'=>$pages]);
    }
    public function postAdd(Request $request)
    {
        $menu = new Menu();
        $menu->title = $request->txtTitle;
        $menu->url = $request->txtUrl;
        $menu->order = $request->txtOrder;
        $menu->status = $request->status;
        $menu->save();
        $validator = Validator::make($request->all(), [
            'txtUrl' => 'unique:menu,url',
        ]);

        if ($validator->fails()) {
            return redirect()
            			->back()
                        ->withErrors($validator)
                        ->withInput();
        }
        $notification = array(
            'message' => 'Thêm Mới Menu Thành Công!', 
            'alert-type' => 'success',
        );
        return redirect()->route('getListMenu')->with($notification);
    }
}
