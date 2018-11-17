<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\DoiTac;
class DoiTacController extends Controller
{
    public function getList()
    {
    	$data = DoiTac::where('key', 'doitac')->first();
    	$doitac = isset($data) ? unserialize($data->data) : '';
    	return view('admin.pages.doitac.index', ['doitac'=>$doitac]);
    }
    public function postAdd(Request $request)
    {
    	$doitac = DoiTac::where('key', 'doitac')->first();
    	if(!$doitac){
    		$doitac = new DoiTac();
    		$doitac->key = 'doitac';
	    	$dataDoiTac = array();
	        $titleDoiTac = $request->txtImageTitleIndex;
	        $imageDoiTac = $request->imageIndex;
	        if(is_array($imageDoiTac)) {
	            for($i=0; $i < count($imageDoiTac); $i++) {
	                $dataDoiTac[$i] = [
	                    'title' => $titleDoiTac[$i],
	                    'image' => $imageDoiTac[$i],
	                ];
	            }
	        }
			
		}else{
			$doitac = DoiTac::where('key', 'doitac')->first();
	    	$dataDoiTac = array();
	        $titleDoiTac = $request->txtImageTitleIndex;
	        $imageDoiTac = $request->imageIndex;
	        if(is_array($imageDoiTac)) {
	            for($i=0; $i < count($imageDoiTac); $i++) {
	                $dataDoiTac[$i] = [
	                    'title' => $titleDoiTac[$i],
	                    'image' => $imageDoiTac[$i],
	                ];
	            }
	        }
			
		}
		$doitac->data = serialize($dataDoiTac);
		$doitac->save();
		$notification = array(
            'message' => 'Cập Nhật Thành Công!', 
            'alert-type' => 'success',
        );
        return redirect()->back()->with($notification);
    }
    public function postEdit()
    {
    	
    }
    public function getDelete()
    {
    	
    }
}
