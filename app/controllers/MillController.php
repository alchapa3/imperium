<?php

class MillController extends BaseController {

	public function addMill(){

		$user = Auth::user();
		
		$lumber_count = DB::table('kingdom')->where('id', $user->id)->pluck('wood_count');
		$lumbermill = DB::table('producers')->where('id', $user->id)->pluck('lumbermill');
				
			if($lumber_count >= 10*($lumbermill*$lumbermill)){
				DB::table('kingdom')
            		->where('id', $user->id)
            		->decrement('wood_count',10*($lumbermill*$lumbermill));
				
            	DB::table('producers')
            		->where('UID', $user->id)
            		->increment('lumbermill',1);

            	DB::table('kingdom')
            		->where('UID', $user->id)
            		->increment('population',10);
            }

		return Redirect::to('/feed');


	}

}