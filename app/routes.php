<?php
//Redirect to Login
Route::get("/", function(){
	return Redirect::to('/login');
});

//Authentication Controller
Route::get('/login', 'AuthenticationController@showLoginView');
Route::post('/login', 'AuthenticationController@loginUser');
Route::get('/logout', 'AuthenticationController@logout');

//Registration Controller
Route::get('/signup', 'RegistrationController@showSignUpView');
Route::post('/signup', 'RegistrationController@signUp');

Route::get('/newgoogleuser', 'GoogleController@showGoogleView');
Route::post('/newgoogleuser', 'GoogleController@addGoogleUser');

//Feed
//Route::get('/feed', 'FeedController@showFeed');

//Home
Route::get('/feed', 'HomeController@showHome');

//Buttons
Route::post('/but1','ButtonController1@buttonCount1');
Route::post('/but2','ButtonController2@buttonCount2');
Route::post('/but3','ButtonController3@buttonCount3');
Route::post('/but4','ButtonController4@buttonCount4');
Route::post('/but5','ButtonController5@buttonCount5');

//Producer Buttons
Route::post('/smith','SmithController@addSmith');
Route::post('/mill','MillController@addMill');
Route::post('/mine','MineController@addMine');
Route::post('/farm','FarmController@addFarm');
Route::post('/well','WellController@addWell');

//Post
//Route::post('/post', 'PostController@createPost');

//Comment
//Route::post('/comment', 'CommentsController@createComment');

//Misc
Route::get('/users', 'AuthenticationController@showUsers');

//Home
Route::get('/','StartController@goThere');

//Google Auth
Route::get('/gauth/{auth?}',"AuthenticationController@getGoogleLogin");

//Trade
Route::get('/market','MarketController@showMarketView');
Route::post('/market','MarketController@acceptTrade');


Route::get('/trade','TradeController@showTradeView');
Route::post('/trade','TradeController@postTrade');


