<?php

class WellController extends BaseController {

	public function addWell(){
		
		$water_count = DB::table('kingdom')->where('id', 1)->pluck('water_count');
				
			if($water_count >= 10){
				DB::table('kingdom')
            		->where('id', 1)
            		->decrement('water_count',10);
				
            	DB::table('producers')
            		->where('UID', 1)
            		->increment('well',1);
            }

		return Redirect::to('/feed');


	}

}