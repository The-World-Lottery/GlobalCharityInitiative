<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('layouts.master');
});

Route::get('/suggestions/userssuggestions/{id}','SuggestionsController@userssuggestions');
Route::get('/upvote/{id}','SuggestionsController@upvote');
Route::get('/downvote/{id}','SuggestionsController@downvote');
Route::get('/highest','SuggestionsController@highest');
Route::get('/makeAdmin/{id}','UsersController@makeAdmin');
Route::get('/destroyAdmin/{id}','UsersController@destroyAdmin');
Route::get('/openAddress/{id}','SuggestionsController@openAddress');
Route::get('/closeAddress/{id}','SuggestionsController@closeAddress');
Route::get('/adminIndex','SuggestionsController@adminIndex');



Route::get('/lotteryTicket','LotteriesController@addUserToEntries');
Route::get('/raffleTicket','RafflesController@addUserToEntries');

Route::resource('currencyconversion','CurrencyConversionController');

Route::resource('suggestions', 'SuggestionsController');

Route::resource('users', 'UsersController');

Route::resource('lotteries', 'LotteriesController');

Route::resource('raffles', 'RafflesController');

Route::resource('aboutus', 'AboutUsController');

// Login routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');

Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');