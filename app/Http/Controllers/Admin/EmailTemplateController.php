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
        return view('pages.admin.emailtemplate.add');
    }
    public function postAdd(AddEmailTemplateRequest $request)
    {
        $mail = new EmailTemplate();
        $mail->title = $request->txttitle;
        $mail->key = $request->txtkey;
        $mail->lang_code = $request->sltlang;
        $mail->content = $request->content;
        $mail->save();
        return redirect()->route('getListEmailTemplate')->with('thongbao',trans('general.addNewSuccessfully'));
    }
    public function getEdit($id)
    {
        $mail = EmailTemplate::find($id);
        return view('pages.admin.emailtemplate.edit',['mail'=>$mail]);
    }
    public function postEdit(EditEmailTemplateRequest $request,$id)
    {
        $mail = EmailTemplate::find($id);
        $mail->title = $request->txttitle;
        $mail->lang_code = $request->sltlang;
        $mail->content = $request->content;
        $mail->save();
        return redirect()->route('getListEmailTemplate')->with('thongbao',trans('general.updateSuccessfully'));
    }
    public function getDelete($id)
    {
        $mail = EmailTemplate::find($id);
        $mail->delete();
        return redirect()->route('getListEmailTemplate')->with('thongbao',trans('general.deleteSuccessfully'));
    }
}
