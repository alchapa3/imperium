<?php

class FarmController extends BaseController {

	public function addFarm(){

		$user = Auth::user();
		
		$food_count = DB::table('kingdom')->where('id', $user->id)->pluck('food_count');
				
			if($food_count >= 10){
				DB::table('kingdom')
            		->where('id', $user->id)
            		->decrement('food_count',10);
				
            	DB::table('producers')
            		->where('UID', $user->id)
            		->increment('farm',1);
            }

		return Redirect::to('/feed');


	}

}