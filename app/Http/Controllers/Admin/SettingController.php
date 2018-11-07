<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Setting;
class SettingController extends Controller
{
    public function getEmailConfig()
    {
        $data = Setting::where('key', 'mail-config')->value('value');
        $emailSetting = unserialize($data);
        return view('admin.pages.settings.email')->with(['emailSetting'=>$emailSetting]);        
    }
    public function postEmailConfig(Request $request)
    {
        $emailSetting = [
            'sender' => $request->txtsender,
            'email' => $request->txtemail,
            'password' => $request->txtpassword,
            'driver' => $request->txtdriver,
            'host' => $request->txthost,
            'port' => $request->txtport,
            'encrypt' => $request->radioencrypt,
        ];

        $emailSetting = serialize($emailSetting);
        try {
            $pSets = Setting::where('key','mail-config')->count();

            if($pSets > 0) {
                Setting::where('key','mail-config')->update(['value'=>$emailSetting]);
            } else {
                $mailserver = new Setting;
                $mailserver->key = 'mail-config';
                $mailserver->value = $emailSetting;
                $mailserver->save();

            }
            return redirect()->route('getEmailConfig')->with('success', trans('general.updateSuccessfully'));

        } catch (\Exception $e) {
            //throw $e;
            $request->session()->flash('error', trans('validation.updateError'));
            return redirect()->route('getEmailConfig');
        }
    }
    public function getMetaSEO()
    {
        $meta = Setting::where('key', 'meta-seo')->value('value');
        $meta = unserialize($meta);
        return view('admin.pages.settings.meta',['meta'=>$meta]);
    }
    public function postMetaSEO(Request $request)
    {
        $meta = [
            'title' => $request->txttitle,
            'keyword' => $request->txtkeyword,
            'description' => $request->txtdescription,
            'charset' => $request->txtcharset
        ];
        $meta = serialize($meta);
        try {
            $pSets = Setting::where('key','meta-seo')->count();

            if($pSets > 0) {
                Setting::where('key','meta-seo')->update(['value'=>$meta]);
            } else {
                $metaConfig = new Setting;
                $metaConfig->key = 'meta-seo';
                $metaConfig->value = $meta;
                $metaConfig->save();

            }
            return redirect()->route('getMetaSEO')->with('success', trans('general.updateSuccessfully'));

        } catch (\Exception $e) {
            //throw $e;
            $request->session()->flash('error', trans('validation.updateError'));
            return redirect()->route('getMetaConfig');
        }
    }
    // public function getWebsiteStatus()
    // {
    //     $websitestatus = Setting::where('key', 'websitestatus')->value('value');
    //     $websitestatus = unserialize($websitestatus);
    //     return view('pages.admin.settings.websitestatus',['websitestatus'=>$websitestatus]);   
    // }
    // public function postWebsiteStatus(Request $request)
    // {
    //     $websitestatus = [
    //         'status' => $request->ckeckstatus,
    //         'content' => $request->txtcontent
    //     ];
    //     $websitestatus = serialize($websitestatus);
    //     try {
    //         $pSets = Setting::where('key','websitestatus')->count();

    //         if($pSets > 0) {
    //             Setting::where('key','websitestatus')->update(['value'=>$websitestatus]);
    //         } else {
    //             $statusConfig = new Setting;
    //             $statusConfig->key = 'websitestatus';
    //             $statusConfig->value = $websitestatus;
    //             $statusConfig->save();

    //         }
    //         return redirect()->route('getWebsiteStatus')->with('success', trans('general.updateSuccessfully'));

    //     } catch (\Exception $e) {
    //         //throw $e;
    //         $request->session()->flash('error', trans('validation.updateError'));
    //         return redirect()->route('getWebsiteStatus');
    //     }
    // }
    public function getWebInfo()
    {
    	return view('admin.pages.settings.info');
    }
}
