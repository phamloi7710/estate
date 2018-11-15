<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\News;
use App\Model\DuAn;
class SearchController extends Controller
{
    public function getSearch(Request $request)
    {
    	$data = $request->data;
    	$type = $request->type;
    	if ($type=='project') {
    		$result = DuAn::where('title', 'LIKE', '%' . $data . '%');
    	}else if($type=='news'){
    		$result = News::where('title', 'LIKE', '%' . $data . '%');
    	}
    	if(isset($result)){
            $result = $result->paginate(8)->appends($request->all())->setPath('');
            return view('frontend.pages.search', ['result'=>$result, 'data'=>$data, 'type'=>$type]);
        }else{
            return redirect('');
        }
    }
}
