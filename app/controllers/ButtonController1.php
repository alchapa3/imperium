<?php

class ButtonController1 extends BaseController {

	public function buttonCount1(){


		$user = Auth::user();

		//DB::table('buttons')->increment('count', 1, array('id' => 1));
		
			DB::table('buttons')
				->where('id', ((5 * $user->id)-4))
				->increment('count', 1);

				$count1 = DB::table('buttons')->where('id', ((5 * $user->id)-4))->pluck('count');
				$smith = DB::table('producers')->where('id', $user->id)->pluck('smith');
				
				if($count1 > 10){
					DB::table('buttons')
            			->where('id', ((5 * $user->id)-4))
            			->update(['count' => 0]);

            		DB::table('kingdom')
            			->where('UID', $user->id)
            		 	->increment('iron_count',$smith);
				}

			

			return Redirect::to('/feed');

		

	}
}