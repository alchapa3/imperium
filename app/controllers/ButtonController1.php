<?php

class ButtonController1 extends BaseController {

	public function buttonCount1(){

		//DB::table('buttons')->increment('count', 1, array('id' => 1));
		
			DB::table('buttons')
				->where('id', 1)
				->increment('count', 1);

				$count1 = DB::table('buttons')->where('id', 1)->pluck('count');
				$smith = DB::table('producers')->where('id', 1)->pluck('smith');
				
				if($count1 > 10){
					DB::table('buttons')
            			->where('id', 1)
            			->update(['count' => 0]);

            		DB::table('kingdom')
            			->where('UID', 1)
            		 	->increment('iron_count',$smith);
				}

			

			return Redirect::to('/feed');

		

	}
}