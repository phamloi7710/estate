<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Support\Facades\Mail;
use App\Notifications\ResetPassword;
use Illuminate\Mail\Message;
class User extends Authenticatable
{
    use Notifiable;
    use HasRoles;
    protected $fillable = [
        'name', 'email', 'password',
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function sendPasswordResetNotification($token)
    {
       $this->notify(new ResetPassword($token));
    }
}
