<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\EmailTemplate;
class EmailTemplateController extends Controller
{
    public function getList()
    {
        $mail = EmailTemplate::all();
        return view('admin.pages.emailtemplate.list',['mail'=>$mail]);
    }
    public function getAdd()
    {
        return view('admin.pages.emailtemplate.add');
    }
    public function postAdd(Request $request)
    {
        $mail = new EmailTemplate();
        $mail->title = $request->txttitle;
        $mail->key = $request->txtkey;
        $mail->content = $request->content;
        $mail->save();
        $notification = array(
            'message' => 'Thêm Mới Email Template Thành Công!', 
            'alert-type' => 'success',
        );
        return redirect()->route('getListEmailTemplate')->with($notification);
    }
    public function getEdit($id)
    {
        $mail = EmailTemplate::find($id);
        return view('admin.pages.emailtemplate.edit',['mail'=>$mail]);
    }
    public function postEdit(Request $request,$id)
    {
        $mail = EmailTemplate::find($id);
        $mail->title = $request->txttitle;
        $mail->key = $request->txtkey;
        $mail->content = $request->content;
        $mail->save();
        $notification = array(
            'message' => 'Cập Nhật Email Template Thành Công!', 
            'alert-type' => 'success',
        );
        return redirect()->route('getListEmailTemplate')->with($notification);
    }
    public function getDelete($id)
    {
        $mail = EmailTemplate::find($id);
        $mail->delete();
        return redirect()->route('getListEmailTemplate')->with('thongbao',trans('general.deleteSuccessfully'));
    }
}
