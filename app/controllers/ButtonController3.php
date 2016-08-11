<?php

class ButtonController3 extends BaseController {


	public function buttonCount3(){

		$user = Auth::user();

		//DB::table('buttons')->increment('count', 1, array('id' => 1));
		
			DB::table('buttons')
				->where('id', ((5 * $user->id)-2))
				->increment('count', 1);

				$count = DB::table('buttons')->where('id', ((5 * $user->id)-2))->pluck('count');
				$mine = DB::table('producers')->where('id', $user->id)->pluck('mine');

				if($count > 10){
					DB::table('buttons')
            			->where('id', ((5 * $user->id)-2))
            			->update(['count' => 0]);

            		DB::table('kingdom')
            			->where('UID', $user->id)
            		 	->increment('gold_count',$mine);
				}

			return Redirect::to('/feed');
		

	}
}