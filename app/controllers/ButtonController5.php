<?php

class ButtonController5 extends BaseController {



	public function buttonCount5(){

		//DB::table('buttons')->increment('count', 1, array('id' => 1));
		
			DB::table('buttons')
				->where('id', 5)
				->increment('count', 1);

				$count = DB::table('buttons')->where('id', 5)->pluck('count');
				$well = DB::table('producers')->where('id', 1)->pluck('well');


				if($count > 10){
					DB::table('buttons')
            			->where('id', 5)
            			->update(['count' => 0]);

            		DB::table('kingdom')
            			->where('UID', 1)
            		 	->increment('water_count',$well);
				}

			return Redirect::to('/feed');
		

	}
}