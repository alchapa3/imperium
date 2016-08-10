<?php

class ButtonController2 extends BaseController {


	public function buttonCount2(){

		//DB::table('buttons')->increment('count', 1, array('id' => 1));
		
			DB::table('buttons')
				->where('id', 2)
				->increment('count', 1);

				$count = DB::table('buttons')->where('id', 2)->pluck('count');
				$lumbermill = DB::table('producers')->where('id', 1)->pluck('lumbermill');

				if($count > 10){
					DB::table('buttons')
            			->where('id', 2)
            			->update(['count' => 0]);

            		DB::table('kingdom')
            			->where('UID', 1)
            		 	->increment('wood_count',$lumbermill);
				}

			return Redirect::to('/feed');
		

	}
}