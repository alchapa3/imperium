<?php

class SmithController extends BaseController {

	public function addSmith(){
		
		$iron_count = DB::table('kingdom')->where('id', 1)->pluck('iron_count');
				
			if($iron_count >= 10){
				DB::table('kingdom')
            		->where('id', 1)
            		->decrement('iron_count',10);
				
            	DB::table('producers')
            		->where('UID', 1)
            		->increment('smith',1);
            }

		return Redirect::to('/feed');


	}

}