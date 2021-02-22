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

//use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    //return view('welcome');
});

Route::get('/E-Pay', 'MainController@index')->name('main.index');

Route::get('/login', 'LoginController@index')->name('login.index');
Route::post('/login', 'LoginController@verify');
Route::get('/logout', 'LogoutController@index');

Route::group(['middleware'=>'sess'],function(){

    Route::get('/home', 'HomeController@index')->name('home.index');  /* ->middleware('sess'); */
    //Route::get('/home', ['uses'=>'HomeController@index']);

    Route::get('/home/create', 'HomeController@create')->name('home.create');
    Route::post('/home/create', 'HomeController@store');

    Route::get('/home/userlist', 'HomeController@userlist')->name('home.userlist');

    Route::get('/home/edit/{id}', 'HomeController@edit')->name('home.edit');
    Route::post('/home/edit/{id}', 'HomeController@update');

    Route::get('/home/details/{id}', 'HomeController@show')->name('home.show');

    Route::group(['middleware'=>'admin'],function(){

    Route::get('/home/delete/{id}', 'HomeController@delete')->name('home.delete');
    Route::post('/home/delete/{id}', 'HomeController@destroy');

    });

});




