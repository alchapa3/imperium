<?php

class SmithController extends BaseController {

	public function addSmith(){

		$user = Auth::user();
		
		$iron_count = DB::table('kingdom')->where('id', $user->id)->pluck('iron_count');
				
			if($iron_count >= 10){
				DB::table('kingdom')
            		->where('id', $user->id)
            		->decrement('iron_count',10);
				
            	DB::table('producers')
            		->where('UID', $user->id)
            		->increment('smith',1);
            }

		return Redirect::to('/feed');


	}

}