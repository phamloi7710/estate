<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Model\EmailTemplate;
use App;
use App\Model\Contact as ContactModel;
class Contact extends Mailable
{
    use Queueable, SerializesModels;
    public $contact;
    public function __construct($contact)
    {
        $this->contact = $contact;
    }
    public function build()
    {
        $mail = EmailTemplate::where('key','new-contact')->first();
        return $this->view('mail.newContact',['mail'=>$mail])->subject('Liên Hệ Mới');
    }
}
