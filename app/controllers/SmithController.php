<?php

class SmithController extends BaseController {

	public function addSmith(){

		$user = Auth::user();
		
		$iron_count = DB::table('kingdom')->where('id', $user->id)->pluck('iron_count');
		$smith = DB::table('producers')->where('id', $user->id)->pluck('smith');
				
			if($iron_count >= 10*($smith*$smith)){
				DB::table('kingdom')
            		->where('id', $user->id)
            		->decrement('iron_count',10*($smith*$smith));
				
            	DB::table('producers')
            		->where('UID', $user->id)
            		->increment('smith',1);

            	DB::table('kingdom')
            		->where('UID', $user->id)
            		->increment('population',10);
            }

		return Redirect::to('/feed');


	}

}