<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Slider;
use App\Model\News;
use App\Model\DuAn;
use App\Model\DoiTac;
class IndexController extends Controller
{
    public function getIndex()
    {
    	$slider = Slider::where('status', 'active')->get();
    	$news = News::where('status', 'active')->orderBy('created_at', 'DESC')->limit(10)->get();
    	$duan = DuAn::where('status', 'active')->where('status_home', 'active')->first();
    	$dataTongQuanIndex = $duan ? unserialize($duan->tong_quan_index) : '';
        $dataViTriIndex = $duan ? unserialize($duan->vi_tri_index) : '';
    	$dataThietKeIndex = $duan ? unserialize($duan->thiet_ke_index) : '';
    	$dataTienIchIndex = $duan ? unserialize($duan->tien_ich_index) : '';
    	$imageDataIndex = $duan ? unserialize($duan->hinh_anh_index) : '';
        $dataDoiTac = DoiTac::where('key', 'doitac')->first();
        $doitac = unserialize($dataDoiTac->data);
    	return view('frontend.index', 
    		[
    			'slider'=>$slider, 
    			'news'=>$news, 
    			'duan'=>$duan, 
    			'dataTongQuanIndex'=>$dataTongQuanIndex, 
                'dataViTriIndex'=>$dataViTriIndex,
    			'dataThietKeIndex'=>$dataThietKeIndex,
    			'dataTienIchIndex'=>$dataTienIchIndex,
                'imageDataIndex'=>$imageDataIndex,
    			'doitac'=>$doitac,
    		]);
    }
}
