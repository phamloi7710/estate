<?php
Route::get('admin/login.html','Admin\AccountController@getLogin')->name('getLoginAdmin');
Route::post('admin/login.html','Admin\AccountController@postLogin')->name('postLoginAdmin');
Route::get('admin/logout','Admin\AccountController@getLogout')->name('logout');
Route::group(['prefix'=>'admin', 'middleware'=>'checkRoleAdmin'], function(){
	Route::get('uploads', '\UniSharp\LaravelFilemanager\controllers\LfmController@show');
    Route::post('uploads/upload', '\UniSharp\LaravelFilemanager\controllers\UploadController@upload');
	Route::get('', 'Admin\IndexController@getIndex')->name('getIndexAdmin');
	Route::get('image-management.html', 'Admin\IndexController@getFileManagement')->name('getFileManagement');
	Route::group(['prefix'=>'permissions'], function(){
		Route::get('', 'Admin\PermisssionController@getList')->name('getListPermisssions');
		Route::post('add', 'Admin\PermisssionController@postAdd')->name('postAddPermisssion');
		Route::post('edit/{id}', 'Admin\PermisssionController@postEdit')->name('postEditPermisssion');
		Route::get('delete/{id}', 'Admin\PermisssionController@delete')->name('deletePermisssion');
	});
	Route::group(['prefix'=>'user'], function(){
		Route::get('', 'Admin\UserController@getList')->name('getListUsers');
		Route::get('add-new.html', 'Admin\UserController@getAdd')->name('getAddUser');
		Route::post('add-new.html', 'Admin\UserController@postAdd')->name('postAddUser');
		Route::get('edit/{alias}.html', 'Admin\UserController@getEdit')->name('getEditUser');
		Route::post('edit/{alias}.html', 'Admin\UserController@postEdit')->name('postEditUser');
		Route::get('delete-user.html', 'Admin\UserController@deleteUser')->name('deleteUser');
	});
	Route::group(['prefix'=>'news'], function(){
		Route::get('categories.html', 'Admin\NewsController@getListCate')->name('getListCate');
		Route::post('add-new-category.html', 'Admin\NewsController@postAddCate')->name('postAddNewsCate');
		Route::post('edit-category/{slug}.html', 'Admin\NewsController@postEditCate')->name('postEditNewsCate');
		Route::get('delete-category/{id}', 'Admin\NewsController@deleteCate')->name('deleteNewsCate');
		Route::get('', 'Admin\NewsController@getList')->name('getListNews');
		Route::get('add-new.html', 'Admin\NewsController@getAdd')->name('getAddNews');
		Route::post('add-new.html', 'Admin\NewsController@postAdd')->name('postAddNews');
		Route::get('edit/{alias}.html', 'Admin\NewsController@getEdit')->name('getEditNews');
		Route::post('edit/{alias}.html', 'Admin\NewsController@postEdit')->name('postEditNews');
		Route::get('delete/{id}', 'Admin\NewsController@delete')->name('deleteNews');
		Route::post('updateSort', 'Admin\NewsController@postUpdateSort')->name('postUpdateSort');
	});
	Route::group(['prefix'=>'slider'], function(){
		Route::get('list.html', 'Admin\SliderController@getList')->name('getListSliderAdmin');
		Route::get('add-new.html', 'Admin\SliderController@getAdd')->name('getAddSliderAdmin');
		Route::post('add-new.html', 'Admin\SliderController@postAdd')->name('postAddSliderAdmin');
		Route::get('edit/{id}.html', 'Admin\SliderController@getEdit')->name('getEditSliderAdmin');
		Route::post('edit/{id}.html', 'Admin\SliderController@postEdit')->name('postEditSliderAdmin');
		Route::get('delete/{id}', 'Admin\SliderController@delete')->name('deleteSliderAdmin');
	});
	Route::group(['prefix'=>'page'], function(){
		Route::get('list.html', 'Admin\PagesController@getList')->name('getListPageAdmin');
		Route::get('add-new.html', 'Admin\PagesController@getAdd')->name('getAddPageAdmin');
		Route::post('add-new.html', 'Admin\PagesController@postAdd')->name('postAddPageAdmin');
		Route::get('edit/{id}.html', 'Admin\PagesController@getEdit')->name('getEditPageAdmin');
		Route::post('edit/{id}.html', 'Admin\PagesController@postEdit')->name('postEditPageAdmin');
		Route::get('delete/{id}', 'Admin\PagesController@delete')->name('deletePageAdmin');
	});
	Route::group(['prefix' => 'email-template'], function () {

        Route::get('index.html', 'Admin\EmailTemplateController@getList')->name('getListEmailTemplate');
        Route::get('add-new.html', 'Admin\EmailTemplateController@getAdd')->name('getAddEmailTemplate');
        Route::post('add-new.html', 'Admin\EmailTemplateController@postAdd')->name('postAddEmailTemplate');
        Route::get('edit-{id}.html', 'Admin\EmailTemplateController@getEdit')->name('getEditEmailTemplate');
        Route::post('edit-{id}.html', 'Admin\EmailTemplateController@postEdit')->name('postEditEmailTemplate');
        Route::get('delete-{id}.html', 'Admin\EmailTemplateController@getDelete')->name('getDeleteEmailTenplate');

    });
});
Route::get('', 'Frontend\IndexController@getIndex')->name('getIndexFrontend');
Route::get('lien-he.html', 'Frontend\FrontendController@getLienHe')->name('getLienHeFrontend');
Route::post('lien-he.html', 'Frontend\ContactController@sendContact')->name('sendContact');
Route::get('chi-tiet-du-an.html', 'Frontend\FrontendController@getChiTietDuAn')->name('getChiTietDuAn');
Route::get('du-an.html', 'Frontend\FrontendController@getDuAn')->name('getDuAn');
Route::get('danh-muc-tin-tuc.html', 'Frontend\FrontendController@getDanhMucTinTuc')->name('getDanhMucTinTuc');
Route::get('chi-tiet-tin-tuc.html', 'Frontend\FrontendController@getChiTietTinTuc')->name('getChiTietTinTuc');
Route::get('gioi-thieu.html', 'Frontend\FrontendController@getGioiThieu')->name('getGioiThieu');
Route::get('dang-nhap.html', 'Frontend\FrontendController@dangnhap')->name('dangnhap');
Route::get('dang-ky.html', 'Frontend\FrontendController@dangky')->name('dangky');
Route::get('{url}.html', 'Frontend\PagesController@getPage')->name('getPageFrontend');


