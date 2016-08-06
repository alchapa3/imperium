<?php

class GoogleController extends \BaseController{

	public function showGoogleView(){
    	return View::make('newgoogleuser');
    }

    public function addGoogleUser(){
    	$kingdom_name = Input::get('kingdom_name');

		try{
			
			User::create([
				'kingdom_name' => $kingdom_name
			]);

		}catch(Exception $e){

			//Errors Log 
			 Session::flash('error_message', 'Oops! Something is wrong!');
			return Redirect::back()->withInput();
		}
		return Redirect::to('/feed');
    }  

}