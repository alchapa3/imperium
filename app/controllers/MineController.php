<?php

class MineController extends BaseController {

	public function addMine(){

		$user = Auth::user();
		
		$gold_count = DB::table('kingdom')->where('id', $user->id)->pluck('gold_count');
		$mine = DB::table('producers')->where('id', $user->id)->pluck('mine');
				
			if($gold_count >= 10*($mine*$mine)){
				DB::table('kingdom')
            		->where('id', $user->id)
            		->decrement('gold_count',10*($mine*$mine));
				
            	DB::table('producers')
            		->where('UID', $user->id)
            		->increment('mine',1);

            	DB::table('kingdom')
            		->where('UID', $user->id)
            		->increment('population',10);
            }

		return Redirect::to('/feed');


	}

}