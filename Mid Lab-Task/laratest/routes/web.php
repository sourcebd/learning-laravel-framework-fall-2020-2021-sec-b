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
    echo "Welcome";
});

Route::get('/registration/customer', 'CRegController@index')->name('Creg.index');
Route::post('/registration/customer', 'CRegController@Creg');

Route::get('/login', 'LoginController@index')->name('login.index');
Route::post('/login', 'LoginController@verify');
Route::get('/logout', 'LogoutController@index')->name('logout.index');
//Route::get('/home', 'HomeController@index');

Route::group(['middleware'=> 'sess'], function(){
    Route::get('/home', ['uses'=>'HomeController@index'])->name('home.index');
    
    Route::get('/home/customerlist', 'HomeController@Clist')->name('home.Clist');
    Route::get('/home/edit/customer/{id}', 'HomeController@Cedit')->name('home.Cedit');
    Route::post('/home/edit/customer/{id}', 'HomeController@Cupdate');
    Route::get('/home/details/customer/{id}', 'HomeController@Cshow')->name('home.Cshow');

    Route::group(['middleware'=> 'admin'], function(){

    Route::get('/home/create/customer', 'HomeController@Ccreate')->middleware('sess')->name('home.Ccreate');
    Route::post('/home/create/customer', 'HomeController@Cstore');

    Route::get('/home/delete/customer/{id}', 'HomeController@Cdelete')->name('home.Cdelete');
    Route::post('/home/delete/customer/{id}', 'HomeController@Cdestroy');

    });

    Route::group(['middleware'=> 'sales'], function(){

    Route::get('/system/sales/physical_store/sales_log', 'Physical_Store_Controller@saleslogCreate')->name('system.salescreate');
    Route::post('/system/sales/physical_store/sales_log', 'Physical_Store_Controller@saleslogStore');
    Route::get('/system/sales/physical_store', 'Physical_Store_Controller@physicalStorelist')->name('system.physicalStore');
    Route::get('/system/sales/social_media', 'Physical_Store_Controller@socialMedialist')->name('system.socialMedia');
    Route::get('/system/sales/ecommerce', 'Physical_Store_Controller@ecommercelist')->name('system.ecommerce');
    
    });

    

    

    Route::resource('/product', 'ProductController');
    //Route::get('/product/abc/{id}', 'ProductController@xyz');
});