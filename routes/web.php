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
    Route::resource('posts', 'PostController');
    // Route::resource('recruitment', 'RecruitmentController');
    Route::get('settings', 'AdminController@settings')->name('admin.setting');
    Route::put('settings', 'AdminController@updateSettings')->name('update.setting');
    Route::resource('contacts', 'ContactController')->only(['index', 'destroy']);
});

Route::group(['middleware' => 'locale', 'namespace' => 'Client'], function () {
    Route::get('/', 'ClientController@index');
    Route::get('tin-tuc', 'ClientController@news')->name('client.post');
    Route::get('tuyen-dung', 'ClientController@recruitment')->name('client.recruitment');
    Route::get('lien-he', 'ClientController@contact')->name('client.contact');
    Route::get('gioi-thieu', 'ClientController@about')->name('client.about');
    Route::get('bao-hanh', 'ClientController@guarantee')->name('client.guarantee');
    Route::get('tin-tuc/{slug}', 'ClientController@newsDetail')->name('client.post_detail');
    Route::get('danh-muc/{slug}', 'ClientController@detailCategory')->name('client.category');
    Route::get('san-pham/{slug}', 'ClientController@detailProduct')->name('client.product');
    Route::post('contact', 'ClientController@sendContact')->name('client.send_contact');
    Route::get('search', 'ClientController@searchProduct')->name('client.search');
    Route::get('change-language/{language}', 'ClientController@changeLanguage')->name('client.change_language');
});

Auth::routes(['register' => false]);

// Route::get('/home', 'HomeController@index')->name('home');
