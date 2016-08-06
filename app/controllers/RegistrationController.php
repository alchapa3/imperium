<?php

class RegistrationController extends \BaseController{

	/*
	 * ShowSignUpView:
	 * This function renders the sign up view which consists of
	 * a sign form.
	 */
	public function showSignUpView(){

		/*if(Auth::check()){
			return Redirect::to('/feed');
		}*/

		return View::make('signup');

	}	

	/* 
	 * signUp(): Sign up form on the sign up view POSTS
	 * to this function. 
	 * This function creates a new user and redirects them to login. 
	 */
	public function signUp(){

		$validation = Validator::make(Input::all(),[
			'email' =>' required|unique:users', 
			'password' => 'required',
			'repassword' => 'required',
			'username'	=> 'required',
			//'gender'	=> 'required'
			'kingdom_name' => 'required'
		]);

		if($validation->fails()){
            $messages = $validation->messages();
            Session::flash('validation_messages', $messages);
            return Redirect::back()->withInput();
        }


		$email = Input::get('email');
		$password = Input::get('password');
		$repassword = Input::get('repassword');
		$name = Input::get('username');
		//$gender = Input::get('gender');
		$kingdom_name = Input::get('kingdom_name');


		try{

			User::create([
				'email'	=> $email,
				'password'	=> Hash::make($password),
				'username' => $name,
				//'gender'	=> $gender
				'kingdom_name' => $kingdom_name
			]);

		}catch(Exception $e){

			//Errors Log 
			 Session::flash('error_message', 'Oops! Something is wrong!');
			return Redirect::back()->withInput();
		}


		Session::flash('success_message', 'Success! Welcome to Our Facbook');
		return Redirect::to('/login');

	}

	/* Unused code
	

		// Code to send verification code
        Mail::send('emails.verify', $view_data, function ($message) use ($email_data) {
            $message->to($email_data['recipient'])
                ->subject($email_data['subject']);
        });

    */   
    
}
