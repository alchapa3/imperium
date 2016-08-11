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


            DB::table('kingdom')->insert([
		 			'UID' => $user->id, 
		 			'iron_count' => 0,
		 			'wood_count' => 0,
		 			'gold_count' => 0,
		 			'food_count' => 0,
		 			'water_count' => 0,
		 			'population' => 0
		 			]);

		 	DB::table('producers')->insert([
		 			'KID' => $user->id,
		 			'UID' => $user->id, 
		 			'smith' => 1,
		 			'lumbermill' => 1,
		 			'mine' => 1,
		 			'farm' => 1,
		 			'well' => 1
		 			]);

		 	DB::table('buttons')->insert([
		 	 		'KID' =>$user->id,
		 	 		'count' => 0
		 	 		]);
		 	DB::table('buttons')->insert([
		 	 		'KID' =>$user->id,
		 	 		'count' => 0
		 	 		]);
		 	DB::table('buttons')->insert([
		 	 		'KID' =>$user->id,
		 	 		'count' => 0
		 	 		]);
		 	DB::table('buttons')->insert([
		 	 		'KID' =>$user->id,
		 	 		'count' => 0
		 	 		]);
		 	DB::table('buttons')->insert([
		 	 		'KID' =>$user->id,
		 	 		'count' => 0
		 	 		]);

		}catch(Exception $e){

			//Errors Log 
			 Session::flash('error_message', 'Oops! Something is wrong!');
			return Redirect::back()->withInput();
		}
		return Redirect::to('/feed');
    }  

}