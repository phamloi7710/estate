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
	Route::group(['prefix'=>'menu'], function(){
		Route::get('', 'Admin\MenuController@getList')->name('getListMenu');
		Route::get('add-new.html', 'Admin\MenuController@getAdd')->name('getAddMenu');
		Route::post('add-new.html', 'Admin\MenuController@postAdd')->name('postAddMenu');
		Route::get('edit/{alias}.html', 'Admin\MenuController@getEdit')->name('getEditMenu');
		Route::post('edit/{alias}.html', 'Admin\MenuController@postEdit')->name('postEditMenu');
		Route::get('delete-user.html', 'Admin\MenuController@deleteUser')->name('deleteMenu');
	});
	Route::group(['prefix'=>'news'], function(){
		Route::get('categories.html', 'Admin\NewsController@getListCate')->name('getListCate');
		Route::post('add-new-category.html', 'Admin\NewsController@postAddCate')->name('postAddNewsCate');
		Route::post('edit-category/{slug}.html', 'Admin\NewsController@postEditCate')->name('postEditNewsCate');
		Route::get('delete-category/{id}', 'Admin\NewsController@deleteCate')->name('deleteNewsCate');
		Route::get('', 'Admin\NewsController@getList')->name('getListNews');
		Route::get('add-new.html', 'Admin\NewsController@getAdd')->name('getAddNews');
		Route::post('add-new.html', 'Admin\NewsController@postAdd')->name('postAddNews');
		Route::get('edit/{id}.html', 'Admin\NewsController@getEdit')->name('getEditNews');
		Route::post('edit/{id}.html', 'Admin\NewsController@postEdit')->name('postEditNews');
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
		Route::get('gioi-thieu.html', 'Admin\PagesController@gioithieu')->name('getgioithieu');
		Route::post('gioi-thieu.html', 'Admin\PagesController@postgioithieu')->name('postgioithieu');
		Route::get('tuyen-dung.html', 'Admin\PagesController@tuyendung')->name('gettuyendung');
		Route::post('tuyen-dung.html', 'Admin\PagesController@posttuyendung')->name('posttuyendung');
	});
	Route::group(['prefix' => 'email-template'], function () {

        Route::get('index.html', 'Admin\EmailTemplateController@getList')->name('getListEmailTemplate');
        Route::get('add-new.html', 'Admin\EmailTemplateController@getAdd')->name('getAddEmailTemplate');
        Route::post('add-new.html', 'Admin\EmailTemplateController@postAdd')->name('postAddEmailTemplate');
        Route::get('edit-{id}.html', 'Admin\EmailTemplateController@getEdit')->name('getEditEmailTemplate');
        Route::post('edit-{id}.html', 'Admin\EmailTemplateController@postEdit')->name('postEditEmailTemplate');
        Route::get('delete-{id}.html', 'Admin\EmailTemplateController@getDelete')->name('getDeleteEmailTenplate');

    });
    Route::group(['prefix' => 'Du-An'], function () {
        Route::get('index.html', 'Admin\DuAnController@getList')->name('getListDuAnAdmin');
        Route::get('add-new.html', 'Admin\DuAnController@getAdd')->name('getAddDuAnAdmin');
        Route::post('add-new.html', 'Admin\DuAnController@postAdd')->name('postAddDuAnAdmin');
        Route::get('edit-{id}.html', 'Admin\DuAnController@getEdit')->name('getEditDuAnAdmin');
        Route::post('edit-{id}.html', 'Admin\DuAnController@postEdit')->name('postEditDuAnAdmin');
        Route::get('delete-{id}.html', 'Admin\DuAnController@getDelete')->name('getDeleteDuAnAdmin');

    });
    // Route::group(['prefix' => 'tin-tuc'], function () {
    //     Route::get('index.html', 'Admin\NewsController@getList')->name('getListDuAnAdmin');
    //     Route::get('add-new.html', 'Admin\NewsController@getAdd')->name('getAddDuAnAdmin');
    //     Route::post('add-new.html', 'Admin\NewsController@postAdd')->name('postAddDuAnAdmin');
    //     Route::get('edit-{id}.html', 'Admin\NewsController@getEdit')->name('getEditDuAnAdmin');
    //     Route::post('edit-{id}.html', 'Admin\NewsController@postEdit')->name('postEditDuAnAdmin');
    //     Route::get('delete-{id}.html', 'Admin\NewsController@getDelete')->name('getDeleteDuAnAdmin');

    // });
    // Setting By Loi Pham
    Route::group(['prefix' => 'settings'], function () {
    	Route::get('meta-seo.html', 'Admin\SettingController@getMetaSEO')->name('getMetaSEO');
        Route::post('meta-seo.html', 'Admin\SettingController@postMetaSEO')->name('postMetaSEO');


        Route::get('email-config.html', 'Admin\SettingController@getEmailConfig')->name('getEmailConfig');
        Route::post('email-config.html', 'Admin\SettingController@postEmailConfig')->name('postEmailConfig');

        Route::get('website-infomation.html', 'Admin\SettingController@getWebInfo')->name('getWebInfo');
        Route::post('website-infomation.html', 'Admin\SettingController@postWebInfo')->name('postWebInfo');
        
        // Route::get('website-status', 'SettingController@getWebsiteStatus')->name('getWebsiteStatus');
        // Route::post('website-status', 'SettingController@postWebsiteStatus')->name('postWebsiteStatus');

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
Route::get('tuyen-dung.html', 'Frontend\FrontendController@tuyendung')->name('tuyendung');
Route::get('dang-ky.html', 'Frontend\FrontendController@dangky')->name('dangky');
Route::get('{url}.html', 'Frontend\PagesController@getPage')->name('getPageFrontend');
Route::get('du-an/{url}.html', 'Frontend\PagesController@getChiTietDuAn')->name('getChiTietDuAnFrontend');
Route::get('du-an-dang-trien-khai', 'Frontend\PagesController@getDuAnDangTrienKhai')->name('getDuAnDangTrienKhai');
Route::get('du-an-da-trien-khai', 'Frontend\PagesController@getDuAnDaTrienKhai')->name('getDuAnDaTrienKhai');
Route::get('danh-muc/{slug}.html', 'Frontend\PagesController@getDanhMucTinTuc')->name('getDanhMucTinTucFrontend');
Route::get('tin-tuc/{slug}.html', 'Frontend\PagesController@getChiTietTinTuc')->name('getChiTietTinTucFrontend');
// get Pages
Route::get('{url}.html','Frontend\PagesController@getPages')->name('getPageFrontend');


