<?php

class FarmController extends BaseController {

	public function addFarm(){
		
		$food_count = DB::table('kingdom')->where('id', 1)->pluck('food_count');
				
			if($food_count >= 10){
				DB::table('kingdom')
            		->where('id', 1)
            		->decrement('food_count',10);
				
            	DB::table('producers')
            		->where('UID', 1)
            		->increment('farm',1);
            }

		return Redirect::to('/feed');


	}

}