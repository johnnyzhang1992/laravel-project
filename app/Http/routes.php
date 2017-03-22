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

Route::group(["prefix" => 'admin','middleware' => 'web','auth'], function () {
    Route::get('/', 'AdminController@index');
    Route::get('/seo', 'AdminController@seo');
    Route::post('/seo/update', 'AdminController@seoUpdate');
    Route::get('/company', 'AdminController@company');
    Route::post('/company/update', 'AdminController@companyUpdate');
});
