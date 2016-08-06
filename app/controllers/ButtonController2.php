<?php

class ButtonController2 extends BaseController {

	public function buttonCount2(){

		//DB::table('buttons')->increment('count', 1, array('id' => 1));
		
			DB::table('buttons')
				->where('id', 2)
				->increment('count', 1);

			return Redirect::to('/feed');
		

	}
}