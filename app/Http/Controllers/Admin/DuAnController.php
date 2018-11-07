<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\DuAn;
class DuAnController extends Controller
{
    public function getList()
    {
    	$duan = DuAn::all();
    	return view('admin.pages.duan.list', ['duan'=>$duan]);
    }
    public function getAdd()
    {
    	return view('admin.pages.duan.add');
    }
    public function postAdd(Request $request)
    {
    	$duan = new DuAn();
    	$duan->title = $request->txtTitle;
        $duan->tomtat = $request->tomtat;
    	$duan->url = changeTitle($request->txtTitle);
    	$duan->image = $request->avatar;
    	$duan->danhmuc = $request->sltCategory;
    	$duan->gioithieu = $request->gioithieu;
    	$duan->vitri = $request->vitri;
    	$duan->thietke = $request->thietke;
    	$duan->tienich = $request->tienich;
    	$duan->thanhtoan = $request->thanhtoan;

    	$imageData = array();
        $titleImage = $request->txtImageTitle;
        $image = $request->image;
        if(is_array($titleImage)) {
            for($i=0; $i < count($titleImage); $i++) {
                $imageData[$i] = [
                    'title' => $titleImage[$i],
                    'image' => $image[$i],
                ];
            }
        }
        $duan->hinhanh = serialize($imageData);




        $videoData = array();
        $urlVideo = $request->txtUrlVideo;
        if(is_array($urlVideo)) {
            for($i=0; $i < count($urlVideo); $i++) {
                $videoData[$i] = [
                    'url' => $urlVideo[$i],
                ];
            }
        }
        $duan->video = serialize($videoData);
        $duan->lienhe = $request->lienhe;
        $duan->save();
        $notification = array(
            'message' => 'Thêm Mới Dự Án Thành Công!', 
            'alert-type' => 'success',
        );
        return redirect()->route('getListDuAnAdmin')->with($notification);
    }
    public function getEdit($id)
    {
    	$duan = DuAn::find($id);
    	$imageData = unserialize($duan->hinhanh);
    	$videoData = unserialize($duan->video);
    	return view('admin.pages.duan.edit', ['duan'=>$duan, 'imageData'=>$imageData, 'videoData'=>$videoData]);
    }
    public function postEdit(Request $request, $id)
    {
    	$duan = DuAn::find($id);
    	$duan->title = $request->txtTitle;
        $duan->tomtat = $request->tomtat;
    	$duan->url = changeTitle($request->txtTitle);
    	$duan->danhmuc = $request->sltCategory;
    	$duan->gioithieu = $request->gioithieu;
    	$duan->vitri = $request->vitri;
    	$duan->thietke = $request->thietke;
    	$duan->tienich = $request->tienich;
    	$duan->thanhtoan = $request->thanhtoan;

    	$imageData = array();
        $titleImage = $request->txtImageTitle;
        $image = $request->image;
        if(is_array($titleImage)) {
            for($i=0; $i < count($titleImage); $i++) {
                $imageData[$i] = [
                    'title' => $titleImage[$i],
                    'image' => $image[$i],
                ];
            }
        }
        $duan->hinhanh = serialize($imageData);




        $videoData = array();
        $urlVideo = $request->txtUrlVideo;
        if(is_array($urlVideo)) {
            for($i=0; $i < count($urlVideo); $i++) {
                $videoData[$i] = [
                    'url' => $urlVideo[$i],
                ];
            }
        }
        $duan->video = serialize($videoData);
        $duan->lienhe = $request->lienhe;
        $duan->save();
        $notification = array(
            'message' => 'Cập Nhật Dự Án Thành Công!', 
            'alert-type' => 'success',
        );
        return redirect()->route('getListDuAnAdmin')->with($notification);
    }
    public function getDelete($id)
    {
    	$duan = DuAn::find($id);
    	$duan->delete();
    	$notification = array(
            'message' => 'Xoá Dự Án Thành Công!', 
            'alert-type' => 'success',
        );
        return redirect()->route('getListDuAnAdmin')->with($notification);
    }

}
