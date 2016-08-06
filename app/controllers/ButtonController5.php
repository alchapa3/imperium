<?php

class ButtonController5 extends BaseController {

	public function buttonCount5(){

		//DB::table('buttons')->increment('count', 1, array('id' => 1));
		
			DB::table('buttons')
				->where('id', 5)
				->increment('count', 1);

			return Redirect::to('/feed');
		

	}
}