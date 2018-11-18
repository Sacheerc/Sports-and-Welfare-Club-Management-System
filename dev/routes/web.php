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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/makedeaddonation','DonationController@index');
Route::post('/validatemember','DonationController@check');
Route::post('/storedonation','DonationController@store');

Route::get('/registration', 'MembersController@index');
Route::post('/store', 'MembersController@store');

Route::get('/admin', ['middleware' => ['auth', 'Admin'], 'uses'=>'AdminController@index']);

