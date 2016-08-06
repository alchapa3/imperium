<?php

class ButtonController4 extends BaseController {

	public function buttonCount4(){

		//DB::table('buttons')->increment('count', 1, array('id' => 1));
		
			DB::table('buttons')
				->where('id', 4)
				->increment('count', 1);

				$count = DB::table('buttons')->where('id', 4)->pluck('count');

				if($count > 10){
					DB::table('buttons')
            			->where('id', 4)
            			->update(['count' => 0]);
				}
				
			return Redirect::to('/feed');
		

	}
}