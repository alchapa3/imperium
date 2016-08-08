<?php

class GoogleController extends \BaseController{

	public function showGoogleView(){
    	return View::make('newgoogleuser');
    }

    public function addGoogleUser(){
    	$user = Auth::user();

    	$kingdom_name = Input::get('kingdom_name');

		try{
			
			DB::table('users')
            ->where('email', $user->email)
            ->update(['kingdom_name' => $kingdom_name]);

		}catch(Exception $e){

			//Errors Log 
			 Session::flash('error_message', 'Oops! Something is wrong!');
			return Redirect::back()->withInput();
		}
		return Redirect::to('/feed');
    }  

}