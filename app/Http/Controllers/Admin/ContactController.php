<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Contact;
class ContactController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:contact-list', ['only' => ['getList']]);
         $this->middleware('permission:contact-edit', ['only' => ['postEdit']]);
         $this->middleware('permission:contact-delete', ['only' => ['deleteContact']]);
    }
    public function getList(Request $request)
    {
    	$contact = Contact::where('id','>',0)->orderBy('status','DESC');
        $status = $request->status;
        if($status){
            $contact->where('status', $status);
        }
        // dd($contact);exit();
        $contact = $contact->paginate(10)->appends($request->all())->setPath('');
    	return view('admin.pages.contact.list', ['contact'=>$contact]);
    }
    public function postEdit(Request $request, $id)
    {
    	$contact = Contact::find($id);
        $contact->status = $request->sltstatus;
        $contact->note = $request->note;
        $contact->save();
        $notification = array(
            'message' => 'Cập Nhật Thông Tin Liên Hệ Thành Công!', 
            'alert-type' => 'success',
        );
        return redirect()->route('getListContact')->with($notification);
    }
    public function deleteContact($id)
    {
    	$contact = Contact::find($id);
        $contact->delete();
        $notification = array(
            'message' => 'Xóa Liên Hệ Thành Công!', 
            'alert-type' => 'success',
        );
        return redirect()->route('getListContact')->with($notification);
    }
}
