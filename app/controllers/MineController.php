<?php

class MineController extends BaseController {

	public function addMine(){
		
		$gold_count = DB::table('kingdom')->where('id', 1)->pluck('gold_count');
				
			if($gold_count >= 10){
				DB::table('kingdom')
            		->where('id', 1)
            		->decrement('gold_count',10);
				
            	DB::table('producers')
            		->where('UID', 1)
            		->increment('mine',1);
            }

		return Redirect::to('/feed');


	}

}