<?php

namespace App\Http\Controllers\Frontend;
use Config;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Contact;
use App\Mail\Contact as MailContact;
use Illuminate\Support\Facades\Mail;
use App\Model\EmailTemplate;
class ContactController extends Controller
{
    public function sendContact(Request $request)
    {
        $contact = new Contact();
        $contact->name = $request->txtContactName;
        $contact->phone = $request->txtContactPhone;
        $contact->email = $request->txtContactEmail;
        $contact->content = $request->contentContact;
        $contact->save();
        $emailAdmin = 'phamloi7710@gmail.com';
        $template = EmailTemplate::where('key','new-contact')->first();
        if(isset($template))
        {
            Mail::to($emailAdmin)->send(new MailContact($contact));
            
        }
        echo "<script LANGUAGE='JavaScript'>
            window.alert('Cám ơn bạn đã quan tâm đến các dự án của OSIMI. Chúng tôi sẽ liên hệ tới bạn trong thời gian sớm nhất');
            window.location.href='/';
            </script>";
        
        
    }
}
