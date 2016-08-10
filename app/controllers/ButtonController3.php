<?php

class ButtonController3 extends BaseController {


	public function buttonCount3(){

		//DB::table('buttons')->increment('count', 1, array('id' => 1));
		
			DB::table('buttons')
				->where('id', 3)
				->increment('count', 1);

				$count = DB::table('buttons')->where('id', 3)->pluck('count');
				$mine = DB::table('producers')->where('id', 1)->pluck('mine');

				if($count > 10){
					DB::table('buttons')
            			->where('id', 3)
            			->update(['count' => 0]);

            		DB::table('kingdom')
            			->where('UID', 1)
            		 	->increment('gold_count',$mine);
				}

			return Redirect::to('/feed');
		

	}
}