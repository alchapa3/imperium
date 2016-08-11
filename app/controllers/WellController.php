<?php

class WellController extends BaseController {

	public function addWell(){

		$user = Auth::user();
		
		$water_count = DB::table('kingdom')->where('id', $user->id)->pluck('water_count');
				
			if($water_count >= 10){
				DB::table('kingdom')
            		->where('id', $user->id)
            		->decrement('water_count',10);
				
            	DB::table('producers')
            		->where('UID', $user->id)
            		->increment('well',1);
            }

		return Redirect::to('/feed');


	}

}