<?php

class WellController extends BaseController {

	public function addWell(){

		$user = Auth::user();
		
		$water_count = DB::table('kingdom')->where('id', $user->id)->pluck('water_count');
		$well = DB::table('producers')->where('id', $user->id)->pluck('well');
				
			if($water_count >= 10*($well*$well)){
				DB::table('kingdom')
            		->where('id', $user->id)
            		->decrement('water_count',10*($well*$well));
				
            	DB::table('producers')
            		->where('UID', $user->id)
            		->increment('well',1);

            	DB::table('kingdom')
            		->where('UID', $user->id)
            		->increment('population',10);
            }

		return Redirect::to('/feed');


	}

}