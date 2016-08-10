<?php

class MillController extends BaseController {

	public function addMill(){
		
		$lumber_count = DB::table('kingdom')->where('id', 1)->pluck('wood_count');
				
			if($lumber_count >= 10){
				DB::table('kingdom')
            		->where('id', 1)
            		->decrement('wood_count',10);
				
            	DB::table('producers')
            		->where('UID', 1)
            		->increment('lumbermill',1);
            }

		return Redirect::to('/feed');


	}

}