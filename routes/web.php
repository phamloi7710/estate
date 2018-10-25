<?php
Route::get('admin/login.html', 'Admin\LoginController@getLogin')->name('getLoginAdmin');
Route::post('admin/login.html', 'Admin\LoginController@postLogin')->name('postLoginAdmin');
Route::get('admin/logout', 'Admin\LoginController@getLogout')->name('logoutAdmin');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix'=>'admin'], function(){
	Route::get('', 'Admin\IndexController@getIndex')->name('getIndexAdmin');
});
