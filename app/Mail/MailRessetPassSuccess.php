<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Model\EmailTemplate;
class MailRessetPassSuccess extends Mailable
{
    use Queueable, SerializesModels;
    public $user;
    public function __construct($user)
    {
        $this->user = $user;
    }
    public function build()
    {
        $mail = EmailTemplate::where('key','reset-pass-success')->first();
        return $this->view('mail.resetPassSuccess',['mail'=>$mail])->subject('Khôi Phục Mật Khẩu Thành Công');
    }
}
