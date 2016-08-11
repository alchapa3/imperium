<?php

class ButtonController4 extends BaseController {


	public function buttonCount4(){

		$user = Auth::user();

		//DB::table('buttons')->increment('count', 1, array('id' => 1));
		
			DB::table('buttons')
				->where('id', ((5 * $user->id)-1))
				->increment('count', 1);

				$count = DB::table('buttons')->where('id', ((5 * $user->id)-1))->pluck('count');
				$farm = DB::table('producers')->where('id', $user->id)->pluck('farm');


				if($count > 10){
					DB::table('buttons')
            			->where('id', ((5 * $user->id)-1))
            			->update(['count' => 0]);

            		DB::table('kingdom')
            			->where('UID', $user->id)
            		 	->increment('food_count',$farm);
				}
				
			return Redirect::to('/feed');
		

	}
}