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

Route::get('/totalbalance','TotalBalanceController@show');

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

Route::get('/createEventForm','EventController@index');
Route::get('/viewEvents','EventController@viewEvents');
Route::post('/createEvent','EventController@create');
Route::get('/viewEvent','EventController@viewEvent');
Route::get('/updateEventView','EventController@updateEventView');
Route::post('/updateEvent','EventController@updateEvent');
Route::post('/deleteEvent','EventController@deleteEvent');

Route::get('/addExpensesFormView','ExpensesController@addExpensesFormView');
Route::post('/addExpenses','ExpensesController@addExpenses');
Route::get('/viewExpenses','ExpensesController@viewExpenses');


Route::get('/offerloans','LoanController@index');
Route::get('/manageloans','LoanController@show');
Route::get('/removeloans/{loan}','LoanController@destroy');
Route::post('/saveloans','LoanController@store');
Route::post('/filterloans','LoanController@filter');
Route::get('/claimloan/{loan}','LoanController@claim');
Route::get('/editloans/{loan}','LoanController@edit');
Route::patch('/updateloan/{loan}','LoanController@update');

Route::get('/unicastmessage','MessageController@unicastmessage');
Route::get('/broadcastmessage','MessageController@broadcastmessage');
Route::post('/sendunicastmessage','MessageController@sendunicastmessage');
Route::post('/getunicastemail','MessageController@getunicastemail');
Route::get('/getmemberEmail','MessageController@getmemberEmail');
Route::post('/sendbroadcastmessage','MessageController@sendbroadcastmessage');


Route::get('/newIncome','IncomeController@index');
Route::post('/manageIncome/create','IncomeController@store')->name('Income.create');
Route::get('/manageIncome','IncomeController@manage');

Route::get('/Income/update/{Income}', ['as' => 'Income.update', 'uses' => 'IncomeController@update']);
Route::get('/Income/remove/{Income}', ['as' => 'Income.remove', 'uses' => 'IncomeController@destroy']);
Route::post('/manageIncome/{Income}/save','IncomeController@save')->name('Income.save');

Route::get('/admin', ['middleware' => ['auth', 'Admin'], 'uses'=>'AdminController@index']);

