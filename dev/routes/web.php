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
//Authentication
Auth::routes();

//public routes
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


//Routes related to total balance
Route::get('/totalbalance','TotalBalanceController@show');

//Routes related to deaddonation management
Route::get('/makedeaddonation','DonationController@index');
Route::get('/editdeaddonation/{donation}','DonationController@edit');
Route::patch('/updatedeaddonation/{donation}','DonationController@update');
Route::get('/removedeaddonation/{donation}','DonationController@destroy');
Route::get('/managedeaddonation','DonationController@show');
Route::post('/validatemember','DonationController@check');
Route::post('/storedonation','DonationController@store');

//Routes related to members
Route::get('/registration', 'MembersController@index');
Route::post('/store', 'MembersController@store');

//Routes related to stripe paymentgateway
Route::get('/payment', 'PaymentController@index');
Route::get('/managepayment', 'PaymentController@show');
Route::get('/removepayment/{payment}','PaymentController@destroy');
Route::get('/editpayment/{payment}','PaymentController@edit');
Route::patch('/updatepayment/{payment}','PaymentController@update');
Route::get('/paymentdetails','PaymentController@details');
Route::post('/proceed','PaymentController@proceed');
Route::post('/makepayment', 'PaymentController@charge');

//Routes related to event planning
Route::get('/createEventForm','EventController@index')->middleware('auth');
Route::get('/viewEvents','EventController@viewEvents');
Route::post('/createEvent','EventController@create');
Route::get('/viewEvent','EventController@viewEvent');
Route::get('/updateEventView','EventController@updateEventView');
Route::post('/updateEvent','EventController@updateEvent');
Route::post('/deleteEvent','EventController@deleteEvent');

//Routes related to expenses
Route::get('/addExpensesFormView','ExpensesController@addExpensesFormView')->middleware('auth');
Route::post('/addExpenses','ExpensesController@addExpenses');
Route::get('/viewExpenses','ExpensesController@viewExpenses');

//Routes related to loans
Route::get('/offerloans','LoanController@index');
Route::get('/manageloans','LoanController@show');
Route::get('/removeloans/{loan}','LoanController@destroy');
Route::post('/saveloans','LoanController@store');
Route::post('/filterloans','LoanController@filter');
Route::get('/claimloan/{loan}','LoanController@claim');
Route::get('/editloans/{loan}','LoanController@edit');
Route::patch('/updateloan/{loan}','LoanController@update');

//Routes related to message sending
Route::get('/unicastmessage','MessageController@unicastmessage');
Route::get('/broadcastmessage','MessageController@broadcastmessage');
Route::post('/sendunicastmessage','MessageController@sendunicastmessage');
Route::post('/getunicastemail','MessageController@getunicastemail');
Route::get('/getmemberEmail','MessageController@getmemberEmail');
Route::post('/sendbroadcastmessage','MessageController@sendbroadcastmessage');

//Routes related incomes
Route::get('/newIncome','IncomeController@index');
Route::post('/manageIncome/create','IncomeController@store')->name('Income.create');
Route::get('/manageIncome','IncomeController@manage');

Route::get('/Income/update/{Income}', ['as' => 'Income.update', 'uses' => 'IncomeController@update']);
Route::get('/Income/remove/{Income}', ['as' => 'Income.remove', 'uses' => 'IncomeController@destroy']);
Route::post('/manageIncome/{Income}/save','IncomeController@save')->name('Income.save');

//Authenticate different user levels with admin middleware
Route::get('/admin', ['middleware' => ['auth', 'Admin'], 'uses'=>'AdminController@index']);

