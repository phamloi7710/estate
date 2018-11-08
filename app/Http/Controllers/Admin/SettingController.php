<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Setting;
use App\Model\WebInfomation;
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
    public function getWebInfo()
    {
    	$info = WebInfomation::where('key', 'web-info')->first();
    	
    	return view('admin.pages.settings.info',['info'=>$info]);
    }
    public function postWebInfo(Request $request)
    {
    	$websiteConfig = WebInfomation::where('key', 'web-info')->first();
    	if(!$websiteConfig){
    		$info = new WebInfomation();
    		$info->site_name = $request->txtSiteName;
    		$info->key = 'web-info';
    		$phoneData = array();
	        $titlePhone = $request->txtTitlePhone;
	        $phone = $request->txtPhone;
	        if(is_array($phone)) {
	            for($i=0; $i < count($phone); $i++) {
	                $phoneData[$i] = [
	                    'title' => $titlePhone[$i],
	                    'phone' => $phone[$i],
	                ];
	            }
	        }
	        $info->phone = serialize($phoneData);

	        $emailData = array();
	        $titleEmail = $request->txtTitleMail;
	        $email = $request->txtMail;
	        if(is_array($email)) {
	            for($i=0; $i < count($email); $i++) {
	                $emailData[$i] = [
	                    'title' => $titleEmail[$i],
	                    'email' => $email[$i],
	                ];
	            }
	        }
	        $info->email = serialize($emailData);

	        $addressData = array();
	        $titleAddress = $request->txtTitleAddress;
	        $address = $request->txtAddress;
	        if(is_array($address)) {
	            for($i=0; $i < count($address); $i++) {
	                $addressData[$i] = [
	                    'title' => $titleAddress[$i],
	                    'address' => $address[$i],
	                ];
	            }
	        }
	        $info->address = serialize($addressData);
	        $info->fanpage = $request->txtFanPage;
	        $info->twitter = $request->txtTwitter;
	        $info->google_plus = $request->txtGooglePlus;
	        $info->youtube_channel = $request->txtYoutubeChannel;
	        $info->instagram = $request->txtInstagram;
	        $info->save();
	        $notification = array(
	            'message' => 'Cập Nhật Thông Tin Website Thành Công!', 
	            'alert-type' => 'success',
	        );
	        return redirect()->route('getWebInfo')->with($notification);
    	}else{
    		$info = WebInfomation::where('key', 'web-info')->first();
    		$info->site_name = $request->txtSiteName;
    		$phoneData = array();
	        $titlePhone = $request->txtTitlePhone;
	        $phone = $request->txtPhone;
	        if(is_array($phone)) {
	            for($i=0; $i < count($phone); $i++) {
	                $phoneData[$i] = [
	                    'title' => $titlePhone[$i],
	                    'phone' => $phone[$i],
	                ];
	            }
	        }
	        $info->phone = serialize($phoneData);

	        $emailData = array();
	        $titleEmail = $request->txtTitleMail;
	        $email = $request->txtMail;
	        if(is_array($email)) {
	            for($i=0; $i < count($email); $i++) {
	                $emailData[$i] = [
	                    'title' => $titleEmail[$i],
	                    'email' => $email[$i],
	                ];
	            }
	        }
	        $info->email = serialize($emailData);

	        $addressData = array();
	        $titleAddress = $request->txtTitleAddress;
	        $address = $request->txtAddress;
	        if(is_array($address)) {
	            for($i=0; $i < count($address); $i++) {
	                $addressData[$i] = [
	                    'title' => $titleAddress[$i],
	                    'address' => $address[$i],
	                ];
	            }
	        }
	        $info->address = serialize($addressData);
	        $info->fanpage = $request->txtFanPage;
	        $info->twitter = $request->txtTwitter;
	        $info->google_plus = $request->txtGooglePlus;
	        $info->youtube_channel = $request->txtYoutubeChannel;
	        $info->instagram = $request->txtInstagram;
	        $info->save();
	        $notification = array(
	            'message' => 'Cập Nhật Thông Tin Website Thành Công!', 
	            'alert-type' => 'success',
	        );
	        return redirect()->route('getWebInfo')->with($notification);
    	}
    }
}
