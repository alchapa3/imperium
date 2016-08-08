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
        return Redirect::to('/');
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
		$password = 'goo39573202pw025sf023b5303t303FHshsFSSswivVXns3k3nf9';

		//return $profile->email.'<a href="logout">Log Out</a>';
		//return var_dump($profile);
		if ($frprofile== null) { 
			User::create([
				'email' => "$profile->email",
				'username' => "$profile->firstName",
				'password' => Hash::make($password)
			]);


			if (Auth::attempt(array('email' => $profile->email, 'password' => $password))){
			return Redirect::to('/newgoogleuser');
			}
		
		}else if (Auth::attempt(array('email' => $profile->email, 'password' => $password))){
			return Redirect::to('/feed');
			}

	}

}
