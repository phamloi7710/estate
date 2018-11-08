<?php

namespace App\Providers;

use Config;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
class MailConfigServiceProvider extends ServiceProvider
{
    public function boot()
    {
        //
    }
    public function register()
    {
        if (Schema::hasTable('settings')) {
            $mail = DB::table('settings')->where('key', 'mail-config')->value('value');
            $mail = unserialize($mail);
            if ($mail)
            {
                $config = array(
                    'driver'     => isset($mail['driver']) ? isset($mail['driver']) : '',
                    'username'   => $mail['email'],
                    'password'   => $mail['password'],
                    'from'       => array('address' => $mail['email'], 'name' => $mail['sender']),
                    'host'       => $mail['host'],
                    'port'       => $mail['port'],
                    'encryption' => isset($mail['encrypt']) ? isset($mail['encrypt']) : '',
                    'sendmail'   => '/usr/sbin/sendmail -bs',
                    'pretend'    => false,
                );
                Config::set('mail', $config);
            }
        }
    }
}