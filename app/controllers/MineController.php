<?php

class MineController extends BaseController {

	public function addMine(){

		$user = Auth::user();
		
		$gold_count = DB::table('kingdom')->where('id', $user->id)->pluck('gold_count');
				
			if($gold_count >= 10){
				DB::table('kingdom')
            		->where('id', $user->id)
            		->decrement('gold_count',10);
				
            	DB::table('producers')
            		->where('UID', $user->id)
            		->increment('mine',1);
            }

		return Redirect::to('/feed');


	}

}