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
use Illuminate\Support\Facades\Validator;
class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Schema::defaultStringLength(191);
        $newsCate = NewsCategory::where('status', 'active')->get();
        View::composer('frontend.general.header', function($view) use($newsCate) {
            $view->with('newsCate',$newsCate);
        });
        View::composer('frontend.general.footer', function($view) use($newsCate) {
            $view->with('newsCate',$newsCate);
        });
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
