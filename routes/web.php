<?php
Route::get('admin/login.html', 'Admin\LoginController@getLogin')->name('getLoginAdmin');
Route::post('admin/login.html', 'Admin\LoginController@postLogin')->name('postLoginAdmin');
Route::get('admin/logout', 'Admin\LoginController@getLogout')->name('logoutAdmin');
Route::group(['prefix'=>'admin','middleware' => 'checkRoleAdmin'], function(){
	Route::get('uploads', '\UniSharp\LaravelFilemanager\controllers\LfmController@show');
    Route::post('uploads/upload', '\UniSharp\LaravelFilemanager\controllers\UploadController@upload');
	Route::get('', 'Admin\AdminController@getIndex')->name('getIndexAdmin');
	Route::group(['prefix'=>'slider'], function(){
		Route::get('danh-sach.html', 'Admin\SliderController@getList')->name('getListSliderAdmin');
		Route::get('them-moi.html', 'Admin\SliderController@getAdd')->name('getAddSliderAdmin');
		Route::post('them-moi.html', 'Admin\SliderController@postAdd')->name('postAddSliderAdmin');
	});
    
});
Route::group(['prefix'=>'admin'], function(){
	Route::get('', 'Admin\IndexController@getIndex')->name('getIndexAdmin');
});
Route::get('', function (){
	return view('frontend.index');
})->name('getIndexFrontend');

Route::get('lien-he.html', 'Frontend\FrontendController@getLienHe')->name('getLienHeFrontend');
Route::get('chi-tiet-du-an.html', 'Frontend\FrontendController@getChiTietDuAn')->name('getChiTietDuAn');
Route::get('du-an.html', 'Frontend\FrontendController@getDuAn')->name('getDuAn');
Route::get('danh-muc-tin-tuc.html', 'Frontend\FrontendController@getDanhMucTinTuc')->name('getDanhMucTinTuc');
Route::get('chi-tiet-tin-tuc.html', 'Frontend\FrontendController@getChiTietTinTuc')->name('getChiTietTinTuc');
Route::get('gioi-thieu.html', 'Frontend\FrontendController@getGioiThieu')->name('getGioiThieu');
Route::get('dang-nhap.html', 'Frontend\FrontendController@dangnhap')->name('dangnhap');
Route::get('dang-ky.html', 'Frontend\FrontendController@dangky')->name('dangky');
