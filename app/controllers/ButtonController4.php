<?php

class ButtonController4 extends BaseController {


	public function buttonCount4(){

		//DB::table('buttons')->increment('count', 1, array('id' => 1));
		
			DB::table('buttons')
				->where('id', 4)
				->increment('count', 1);

				$count = DB::table('buttons')->where('id', 4)->pluck('count');
				$farm = DB::table('producers')->where('id', 1)->pluck('farm');


				if($count > 10){
					DB::table('buttons')
            			->where('id', 4)
            			->update(['count' => 0]);

            		DB::table('kingdom')
            			->where('UID', 1)
            		 	->increment('food_count',$farm);
				}
				
			return Redirect::to('/feed');
		

	}
}