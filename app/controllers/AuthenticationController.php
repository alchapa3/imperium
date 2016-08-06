<?php

class AuthenticationController extends \BaseController {

	public function showLoginView(){
		return View::make('login');
	}

	public function loginUser(){
		$validation = Validator::make(Input::all(),[
			'email' =>' required', 
			'password' => 'required',
		]);

		if($validation->fails()){
            $messages = $validation->messages();
            Session::flash('validation_messages', $messages);
            return Redirect::back()->withInput();
        }

		if (Auth::attempt(Input::only('email', 'password'), true)){
			return Redirect::to('/feed');
		}else{
			Session::flash('error_message', 'Invalid credentials');
			return Redirect::to('/login')->withInput();
		}
	}

	public function logout(){
		Session::flush();
        Auth::logout();
        return Redirect::to('/login');
	}

	public function showUsers(){
		$users = User::all();
		return $users->toJson();
	}

	public function getGoogleLogin($auth=NULL){
		if($auth=='auth'){
			try{
				Hybrid_Endpoint::process();
			}catch(Exception $e){
				return Redirect::to('gauth');
			}
			return;
		}

		$oauth = new Hybrid_Auth(app_path(). '/config/google_auth.php');
		$provider = $oauth->authenticate('Google');
		$profile = $provider->getUserProfile();
		$frprofile = User::where('email','=',$profile->email)->first();

		//return $profile->email.'<a href="logout">Log Out</a>';
		//return var_dump($profile);
		if ($frprofile== null) { 
			User::create([
				'email' => "$profile->email",
				'username' => "$profile->firstName"
			]);

			return Redirect::to('/newgoogleuser');
		}

		//return Redirect::to('/feed');
		return "You are logged in!!";
	}

}
