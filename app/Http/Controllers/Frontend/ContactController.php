<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Contact;
use App\Mail\Contact as MailContact;
use Illuminate\Support\Facades\Mail;
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
        Mail::to($emailAdmin)->send(new MailContact($contact));
        exit('Thành Công!');
    }
}
