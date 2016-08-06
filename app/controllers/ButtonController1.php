<?php

class ButtonController1 extends BaseController {

	public function buttonCount1(){

		//DB::table('buttons')->increment('count', 1, array('id' => 1));
		
			DB::table('buttons')
				->where('id', 1)
				->increment('count', 1);

			

			return Redirect::to('/feed');

		

	}
}