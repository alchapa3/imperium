<?php

class FarmController extends BaseController {

	public function addFarm(){

		$user = Auth::user();
		
		$food_count = DB::table('kingdom')->where('id', $user->id)->pluck('food_count');
		$farm = DB::table('producers')->where('id', $user->id)->pluck('farm');
				
			if($food_count >= 10*($farm*$farm)){
				DB::table('kingdom')
            		->where('id', $user->id)
            		->decrement('food_count',10*($farm*$farm));
				
            	DB::table('producers')
            		->where('UID', $user->id)
            		->increment('farm',1);

            	DB::table('kingdom')
            		->where('UID', $user->id)
            		->increment('population',10);
            }

		return Redirect::to('/feed');


	}

}