<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Model\EmailTemplate;
use App;
class ChangePassword extends Mailable
{
    use Queueable, SerializesModels;
    public $user;
    public function __construct($user)
    {
        $this->user = $user;
    }
    public function build()
    {
        $mail = EmailTemplate::where('key','changed-password')->first();
        return $this->view('mail.changePassSuccess',['mail'=>$mail])->subject('Thay Đổi Mật Khẩu Thành Công');
    }
}
