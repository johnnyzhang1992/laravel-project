<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/
Route::group(['middleware' => 'web'], function () {
    Route::get('/ ','HomeController@index');
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();
    Route::get('/admin', 'AdminController@index');
    Route::get('/admin/seo', 'AdminController@seo');
    Route::post('/admin/seo/update', 'AdminController@seoUpdate');
    Route::get('/admin/company', 'AdminController@company');
    Route::post('/admin/company/update', 'AdminController@companyUpdate');
    Route::post('/admin/upload/logo', 'AdminController@uploadLogo');

});
