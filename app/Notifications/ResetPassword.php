<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Auth\Notifications\ResetPassword as ResetPasswordNotification;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Mail;
use App\Notifications\ResetPassword;
use Illuminate\Mail\Message;
use App\Model\EmailTemplate;
use App;

class ResetPassword extends ResetPasswordNotification
{
    use Queueable;
    public $token;
    public function __construct($token)
    {
        $this->token = $token;
        // $email = EmailTemplate::where('key','forgotpassword-user-success')->get();
        // view()->share('email',$email);
        // view()->share('token',$token);
    }
    public function via($notifiable)
    {
        return ['mail'];
    }
    public function toMail($notifiable)
    {
        // $value = EmailTemplate::where('key','forgotpassword-user-success')->get();
        // foreach($value as $title){}
        // return (new MailMessage)->subject($title['title']);
        $email = EmailTemplate::where('key','forgot-tpassword')->first();
        
        $title = __('general.resetpass');
        $data['token'] = $this->token;
        
        if($email){
            $title = $email->title;
            $data['email'] = $email;
        }

        return (new MailMessage)
            ->subject($title)
            ->markdown('mail.reset-password-success', $data);
    }
}
