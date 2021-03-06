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
use App\Model\Contact;
use Illuminate\Support\Facades\Validator;
class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Schema::defaultStringLength(191);
        $newsCate = NewsCategory::where('status', 'active')->get();
        $info = WebInfomation::where('key', 'web-info')->first();
        $phoneHeader = $info->phone;
        $meta = Setting::where('key', 'meta-seo')->value('value');
        $meta = unserialize($meta);
        $dataContact = Contact::where('status', 'false')->get();
        $countContact = count($dataContact);
        View::composer('frontend.general.header', function($view) use($newsCate) {
            $view->with('newsCate',$newsCate);
        });
        View::composer('admin.general.header', function($view) use($countContact) {
            $view->with('countContact',$countContact);
        });
        View::composer('frontend.general.footer', function($view) use($newsCate) {
            $view->with('newsCate',$newsCate);
        });
        View::composer('frontend.general.header', function($view) use($info) {
            $view->with('info',$info);
        });
        View::composer('frontend.general.footer', function($view) use($info) {
            $view->with('info',$info);
        });
        View::composer('frontend.general.header', function($view) use($meta) {
            $view->with('meta',$meta);
        });
        View::composer('frontend.general.header', function($view) use($phoneHeader) {
            $view->with('phoneHeader',$phoneHeader);
        });
        View::composer('frontend.index', function($view) use($meta) {
            $view->with('meta',$meta);
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
