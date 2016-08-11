<?php

class ButtonController5 extends BaseController {



	public function buttonCount5(){


		$user = Auth::user();

		//DB::table('buttons')->increment('count', 1, array('id' => 1));
		
			DB::table('buttons')
				->where('id', (5 * $user->id))
				->increment('count', 1);

				$count = DB::table('buttons')->where('id', (5 * $user->id))->pluck('count');
				$well = DB::table('producers')->where('id', $user->id)->pluck('well');


				if($count > 10){
					DB::table('buttons')
            			->where('id', (5 * $user->id))
            			->update(['count' => 0]);

            		DB::table('kingdom')
            			->where('UID', $user->id)
            		 	->increment('water_count',$well);
				}

			return Redirect::to('/feed');
		

	}
}