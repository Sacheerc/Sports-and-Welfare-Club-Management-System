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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/404', function () {
    return view('layouts.error');
});

Route::get('/paymentsuccess', function () {
    return view('payment.paymentsuccess');
});

Route::get('/', function () {
    return view('payment.mainindex');
});

Route::get('/makedeaddonation','DonationController@index');
Route::get('/editdeaddonation/{donation}','DonationController@edit');
Route::patch('/updatedeaddonation/{donation}','DonationController@update');
Route::get('/removedeaddonation/{donation}','DonationController@destroy');
Route::get('/managedeaddonation','DonationController@show');
Route::post('/validatemember','DonationController@check');
Route::post('/storedonation','DonationController@store');

Route::get('/registration', 'MembersController@index');
Route::post('/store', 'MembersController@store');

Route::get('/payment', 'PaymentController@index');
Route::get('/managepayment', 'PaymentController@show');
Route::get('/removepayment/{payment}','PaymentController@destroy');
Route::get('/editpayment/{payment}','PaymentController@edit');
Route::patch('/updatepayment/{payment}','PaymentController@update');
Route::get('/paymentdetails','PaymentController@details');
Route::post('/proceed','PaymentController@proceed');
Route::post('/makepayment', 'PaymentController@charge');

Route::get('/createEventForm','EventController@index')->middleware('auth');
Route::get('/viewEvents','EventController@viewEvents')->middleware('auth');
Route::post('/createEvent','EventController@create')->middleware('auth');
Route::get('/viewEvent','EventController@viewEvent')->middleware('auth');
Route::get('/updateEventView','EventController@updateEventView')->middleware('auth');
Route::post('/updateEvent','EventController@updateEvent')->middleware('auth');
Route::post('/deleteEvent','EventController@deleteEvent')->middleware('auth');

Route::get('/addExpensesFormView','ExpensesController@addExpensesFormView')->middleware('auth');

Route::get('/offerloans','LoanController@index');
Route::post('/saveloans','LoanController@store');



Route::get('/admin', ['middleware' => ['auth', 'Admin'], 'uses'=>'AdminController@index']);

