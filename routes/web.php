<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'admin'], function() {
    Route::get('dashboard', 'AdminController@index');
    Route::resource('products', 'ProductController');
    Route::resource('categories', 'CategoryController');
    Route::resource('news', 'NewsController');
    Route::resource('recruitment', 'RecruitmentController');
    Route::get('settings', 'AdminController@settings')->name('admin.setting');
    Route::put('settings', 'AdminController@updateSettings')->name('update.setting');
});

Route::group(['namespace' => 'Client'], function () {
    Route::get('/', 'ClientController@index');
    Route::get('tin-tuc', 'ClientController@news')->name('client.news');
    Route::get('tuyen-dung', 'ClientController@recruitment')->name('client.recruitment');
    Route::get('lien-he', 'ClientController@contact')->name('client.contact');
    Route::get('bao-hanh', 'ClientController@guarantee')->name('client.guarantee');
    Route::get('tin-tuc/{slug}', 'ClientController@newsDetail')->name('client.news.detail');
    Route::get('danh-muc/{slug}', 'ClientController@detailCategory')->name('client.category');
    Route::get('san-pham/{slug}', 'ClientController@detailProduct')->name('client.product');
});

Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');
