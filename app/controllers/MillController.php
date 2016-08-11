<?php

class MillController extends BaseController {

	public function addMill(){

		$user = Auth::user();
		
		$lumber_count = DB::table('kingdom')->where('id', $user->id)->pluck('wood_count');
				
			if($lumber_count >= 10){
				DB::table('kingdom')
            		->where('id', $user->id)
            		->decrement('wood_count',10);
				
            	DB::table('producers')
            		->where('UID', $user->id)
            		->increment('lumbermill',1);
            }

		return Redirect::to('/feed');


	}

}