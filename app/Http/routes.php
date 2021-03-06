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



// Route::get('/','LotteriesController@one');


Route::get('/',function(){
	$lottery = App\Models\Lottery::where('end_date','>',\Carbon\Carbon::now())->where('complete','=','0')->first();
	$raffle = App\Models\Raffle::where('end_date','>',\Carbon\Carbon::now())->first();
	$twl = App\Models\TheWorldLottery::orderBy('id','desc')->limit(1)->get();
	return view('splash')->with(array('lottery' => $lottery, 'raffle' => $raffle, 'twl' => $twl));
});

// Route::get('/testone', 'LotteriesController@one');

// Stripe routes
// Route::post('/lotteryCheckout/{id}/{count}','LotteriesController@chargeCard');
Route::post('/raffleCheckout/{id}/{count}','RafflesController@chargeCard');
Route::post('/gcdCheckout','TheWorldLotterysController@storeNumbers');
Route::get('/ticketFail','RafflesController@notLoggedIn');


Route::get('/suggestions/userssuggestions/{id}','SuggestionsController@userssuggestions');

Route::get('/upvote/{id}','SuggestionsController@upvote');
Route::get('/downvote/{id}','SuggestionsController@downvote');
Route::get('/highest','SuggestionsController@highest');

Route::get('/makeAdmin/{id}','UsersController@makeAdmin');
Route::get('/destroyAdmin/{id}','UsersController@destroyAdmin');
Route::get('/comment/{id}','UsersController@comment');
Route::get('/comments','UsersController@showComments');

Route::get('/saveWallet','UsersController@saveUserWallet');

Route::get('/openAddress/{id}','SuggestionsController@openAddress');
Route::get('/closeAddress/{id}','SuggestionsController@closeAddress');
// Route::get('/suggestions/adminIndex','SuggestionsController@adminIndex');

Route::get('/raffles/adminIndex','RafflesController@adminIndex');
// Route::get('/lotteries/adminIndex','LotteriesController@adminIndex');

Route::get('/picknumbers', 'TheWorldLotterysController@selectNumbers');
Route::get('/TheWorldLottery', 'TheWorldLotterysController@storeNumbers');


// Route::get('/lotteryTicket/{id}','LotteriesController@addUserToEntries');
Route::get('/raffleTicket/{id}','RafflesController@addUserToEntries');
Route::get('/worldLotteryTicket/{id}','TheWorldLotterysController@addUserToEntries');

Route::get('/winners','RafflesController@winners');

Route::resource('currencyconversion','CurrencyConversionController');

// Route::resource('suggestions', 'SuggestionsController');

Route::resource('users', 'UsersController');

// Route::resource('lotteries', 'LotteriesController');

Route::resource('donations', 'RafflesController');

Route::resource('aboutus', 'AboutUsController');


Route::resource('theworldlottery', 'TheWorldLotterysController');

// Login routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');

Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

// Password reset link request routes...
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');

