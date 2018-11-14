<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use View;
use DB;
use App;
use Session;
use App\Model\News;
use App\Model\NewsCategory;
use App\Model\Setting;
use App\Model\WebInfomation;
use Illuminate\Support\Facades\Validator;
class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Schema::defaultStringLength(191);
        
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
