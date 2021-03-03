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

Route::get('/', function () {
    //return view('welcome');
    echo "welcome";
});

Route::get('/registration', 'RegController@index')->name('registration.index');
Route::post('/registration', 'RegController@verify');

Route::get('/login', 'LoginController@index')->name('login.index');
Route::post('/login', 'LoginController@verify');
Route::get('/logout', 'LogoutController@index')->name('logout.index');
//Route::get('/home', 'HomeController@index');

Route::group(['middleware'=> 'sess'], function(){
    Route::get('/home', ['uses'=>'HomeController@index'])->name('home.index');
    
    Route::get('/home/create', 'HomeController@create')->middleware('sess')->name('home.create');
    Route::post('/home/create', 'HomeController@store');
    Route::get('/home/userlist', 'HomeController@userlist')->name('home.userlist');
    Route::get('/home/edit/{id}', 'HomeController@edit')->name('home.edit');
    Route::post('/home/edit/{id}', 'HomeController@update');

    Route::get('/system/sales/physical_store', 'Physical_Store_Controller@physicalStorelist')->name('system.physicalStore');
    Route::get('/system/sales/social_media', 'Physical_Store_Controller@socialMedialist')->name('system.socialMedia');
    Route::get('/system/sales/ecommerce', 'Physical_Store_Controller@ecommercelist')->name('system.ecommerce');

    Route::get('/home/delete/{id}', 'HomeController@delete')->name('home.delete');
    Route::post('/home/delete/{id}', 'HomeController@destroy');
    Route::get('/home/details/{id}', 'HomeController@show')->name('home.show');

    Route::resource('/product', 'ProductController');
    //Route::get('/product/abc/{id}', 'ProductController@xyz');
});