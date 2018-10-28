<?php
Route::get('admin/login.html', 'Admin\LoginController@getLogin')->name('getLoginAdmin');
Route::post('admin/login.html', 'Admin\LoginController@postLogin')->name('postLoginAdmin');
Route::get('admin/logout', 'Admin\LoginController@getLogout')->name('logoutAdmin');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix'=>'admin'], function(){
	Route::get('', 'Admin\IndexController@getIndex')->name('getIndexAdmin');
});
Route::get('', function (){
	return view('frontend.index');
});
Route::get('lien-he.html', 'Frontend\FrontendController@getLienHe')->name('getLienHeFrontend');
Route::get('chi-tiet-du-an.html', 'Frontend\FrontendController@getChiTietDuAn')->name('getChiTietDuAn');
Route::get('du-an.html', 'Frontend\FrontendController@getDuAn')->name('getDuAn');
Route::get('danh-muc-tin-tuc.html', 'Frontend\FrontendController@getDanhMucTinTuc')->name('getDanhMucTinTuc');
Route::get('chi-tiet-tin-tuc.html', 'Frontend\FrontendController@getChiTietTinTuc')->name('getChiTietTinTuc');
Route::get('gioi-thieu.html', 'Frontend\FrontendController@getGioiThieu')->name('getGioiThieu');
Route::get('dang-nhap.html', 'Frontend\FrontendController@dangnhap')->name('dangnhap');
Route::get('dang-ky.html', 'Frontend\FrontendController@dangky')->name('dangky');
