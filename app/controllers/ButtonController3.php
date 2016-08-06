<?php

class ButtonController3 extends BaseController {

	public function buttonCount3(){

		//DB::table('buttons')->increment('count', 1, array('id' => 1));
		
			DB::table('buttons')
				->where('id', 3)
				->increment('count', 1);

			return Redirect::to('/feed');
		

	}
}