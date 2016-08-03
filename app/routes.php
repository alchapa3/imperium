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

//Feed
//Route::get('/feed', 'FeedController@showFeed');

//Home
Route::get('/feed', 'HomeController@showHome');

//Post
Route::post('/post', 'PostController@createPost');

//Comment
Route::post('/comment', 'CommentsController@createComment');

//Misc
Route::get('/users', 'AuthenticationController@showUsers');

//Home
Route::get('/','StartController@goThere');

//
Route::get('/gauth/{auth?}',"AuthenticationController@getGoogleLogin");

//Trade
Route::get('/trade','TradeController@showTradeView');
