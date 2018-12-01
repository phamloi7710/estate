<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\DuAn;
class DuAnController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:duan-list', ['only' => ['getList']]);
         $this->middleware('permission:duan-add', ['only' => ['getAdd', 'postAdd']]);
         $this->middleware('permission:duan-edit', ['only' => ['getEdit', 'postEdit']]);
         $this->middleware('permission:duan-delete', ['only' => ['getDelete']]);
    }
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
        $duan->status = $request->status;
        $duan->order = $request->txtOrder;
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
        $url = $request->txtUrlVideo;
        if(is_array($url)) {
            for($i=0; $i < count($url); $i++) {
                 preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $url[$i], $matches[$i]);
                 if (!empty($matches)) {
                    $videoData[$i] = [
                        'url' => isset($matches[$i][1]) ? $matches[$i][1] : ''
                    ];
                  }
                    
            }
        }
        $duan->video = serialize($videoData);
        $duan->lienhe = $request->lienhe;

        $dataTongQuanIndex = [
            'image'=> $request->imageTongQuanIndex,
            'content'=> $request->tongQuanIndex
        ];
        $dataViTriIndex = [
            'image'=> $request->imageViTriIndex,
            'content'=> $request->vitriIndex
        ];
        $dataTienIchIndex = [
            'image'=> $request->imageTienIchIndex,
            'content'=> $request->TienIchIndex
        ];
        $dataThietKeIndex = [
            'image'=> $request->imageThietKeIndex,
            'content'=> $request->ThietKeIndex
        ];
        $imageDataIndex = array();
        $titleImageIndex = $request->txtImageTitleIndex;
        $imageIndex = $request->imageIndex;
        if(is_array($imageIndex)) {
            for($i=0; $i < count($imageIndex); $i++) {
                $imageDataIndex[$i] = [
                    'title' => $titleImageIndex[$i],
                    'image' => $imageIndex[$i],
                ];
            }
        }
        $duan->tong_quan_index = serialize($dataTongQuanIndex);
        $duan->vi_tri_index = serialize($dataViTriIndex);
        $duan->tien_ich_index = serialize($dataTienIchIndex);
        $duan->thiet_ke_index = serialize($dataThietKeIndex);
        $duan->hinh_anh_index = serialize($imageDataIndex);
        $duan->status_home = $request->statusActiveHome;
        $duan->seoTitle = $request->txtSeoTitle;
        $duan->seoDescription = $request->txtSeoDescription;
        $duan->seoKeyWorks = $request->txtSeoKeywords;
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
        $dataTongQuanIndex = unserialize($duan->tong_quan_index);
        $dataViTriIndex = unserialize($duan->vi_tri_index);
        $dataTienIchIndex = unserialize($duan->tien_ich_index);
        $dataThietKeIndex = unserialize($duan->thiet_ke_index);
    	$imageDataIndex = unserialize($duan->hinh_anh_index);
    	return view('admin.pages.duan.edit', 
            [
                'duan'=>$duan, 
                'imageData'=>$imageData, 
                'videoData'=>$videoData, 
                'dataTongQuanIndex'=>$dataTongQuanIndex, 
                'dataViTriIndex'=>$dataViTriIndex, 
                'dataTienIchIndex'=>$dataTienIchIndex, 
                'dataThietKeIndex'=>$dataThietKeIndex, 
                'imageDataIndex'=>$imageDataIndex
            ]);
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
    	$duan->status = $request->status;
        $duan->order = $request->txtOrder;
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
        $url = $request->txtUrlVideo;
        if(is_array($url)) {
            for($i=0; $i < count($url); $i++) {
                 preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $url[$i], $matches[$i]);
                 if (!empty($matches)) {
                    $videoData[$i] = [
                        'url' => isset($matches[$i][1]) ? $matches[$i][1] : ''
                    ];
                  }
                    
            }
        }
        $duan->video = serialize($videoData);
        $duan->lienhe = $request->lienhe;

        $dataTongQuanIndex = [
            'image'=> $request->imageTongQuanIndex,
            'content'=> $request->tongQuanIndex
        ];
        $dataViTriIndex = [
            'image'=> $request->imageViTriIndex,
            'content'=> $request->vitriIndex
        ];
        $dataTienIchIndex = [
            'image'=> $request->imageTienIchIndex,
            'content'=> $request->TienIchIndex
        ];
        $dataThietKeIndex = [
            'image'=> $request->imageThietKeIndex,
            'content'=> $request->ThietKeIndex
        ];
        $imageDataIndex = array();
        $titleImageIndex = $request->txtImageTitleIndex;
        $imageIndex = $request->imageIndex;
        if(is_array($imageIndex)) {
            for($i=0; $i < count($imageIndex); $i++) {
                $imageDataIndex[$i] = [
                    'title' => $titleImageIndex[$i],
                    'image' => $imageIndex[$i],
                ];
            }
        }
        $duan->tong_quan_index = serialize($dataTongQuanIndex);
        $duan->vi_tri_index = serialize($dataViTriIndex);
        $duan->tien_ich_index = serialize($dataTienIchIndex);
        $duan->thiet_ke_index = serialize($dataThietKeIndex);
        $duan->hinh_anh_index = serialize($imageDataIndex);
        $duan->status_home = $request->statusActiveHome;
        $duan->seoTitle = $request->txtSeoTitle;
        $duan->seoDescription = $request->txtSeoDescription;
        $duan->seoKeyWorks = $request->txtSeoKeywords;
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
