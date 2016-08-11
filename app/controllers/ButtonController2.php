<?php

class ButtonController2 extends BaseController {


	public function buttonCount2(){

		$user = Auth::user();

		//DB::table('buttons')->increment('count', 1, array('id' => 1));
		
			DB::table('buttons')
				->where('id', ((5 * $user->id)-3))
				->increment('count', 1);

				$count = DB::table('buttons')->where('id', ((5 * $user->id)-3))->pluck('count');
				$lumbermill = DB::table('producers')->where('id', $user->id)->pluck('lumbermill');

				if($count > 10){
					DB::table('buttons')
            			->where('id', ((5 * $user->id)-3))
            			->update(['count' => 0]);

            		DB::table('kingdom')
            			->where('UID', $user->id)
            		 	->increment('wood_count',$lumbermill);
				}

			return Redirect::to('/feed');
		

	}
}