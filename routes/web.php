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
    return view('welcome');
});



Route::get('/profile','UserController@show');
Route::post('/demo','UserController@update_photo');


Route::get('/post','UserController@hello');
Route::get('/edit','UserController@change');
Route::post('edit/store','UpinfoController@test');
Route::get('edit/store/','UpinfoController@show');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

