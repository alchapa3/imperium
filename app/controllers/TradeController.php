<?php

class TradeController extends BaseController {

	public function showTradeView(){
		$username = Auth::user();
		//return View::make('market');

		return View::make('trade', [
			'username' => $username		
		]);
	}

	public function postTrade(){

		$validation = Validator::make(Input::all(),[
			'iron1' => 'required',
			'wood1' => 'required',
			'gold1' => 'required',
			'food1' => 'required',
			'water1' => 'required',
			'iron2' => 'required',
			'wood2' => 'required',
			'gold2' => 'required',
			'food2' => 'required',
			'water2' => 'required'
		]);

		if($validation->fails()){
            $messages = $validation->messages();
            Session::flash('validation_messages', $messages);
            return Redirect::back()->withInput();
        }

		$iron1 = Input::get('iron1');
		$wood1 = Input::get('wood1');
		$gold1 = Input::get('gold1');	
		$food1 = Input::get('food1');	
		$water1 = Input::get('water1');	

		$iron2 = Input::get('iron2');	
		$wood2 = Input::get('wood2');	
		$gold2 = Input::get('gold2');	
		$food2 = Input::get('food2');	
		$water2 = Input::get('water2');	
		$user = Auth::user();

		$iron = Kingdom::where('UID', '=', $user->id)->pluck('iron_count');
		$wood = Kingdom::where('UID', '=', $user->id)->pluck('wood_count');
		$gold = Kingdom::where('UID', '=', $user->id)->pluck('gold_count');
		$food = Kingdom::where('UID', '=', $user->id)->pluck('food_count');
		$water = Kingdom::where('UID', '=', $user->id)->pluck('water_count');

		if($iron < $iron2){
			Session::flash('error_message', 'Not enough iron!');
            return Redirect::back()->withInput();
		}else{
			DB::table('kingdom')
            	->where('id', $user->id)
            	->decrement('iron_count',$iron2);
		}

		if($wood < $wood2){
			Session::flash('error_message', 'Not enough wood!');
            return Redirect::back()->withInput();
		}else{
			DB::table('kingdom')
            	->where('id', $user->id)
            	->decrement('wood_count',$wood2);
		}
		if($gold < $gold2){
			Session::flash('error_message', 'Not enough gold!');
            return Redirect::back()->withInput();
		}else{
			DB::table('kingdom')
            	->where('id', $user->id)
            	->decrement('gold_count',$gold2);
		}
		if($food < $food2){
			Session::flash('error_message', 'Not enough food!');
            return Redirect::back()->withInput();
		}else{
			DB::table('kingdom')
            	->where('id', $user->id)
            	->decrement('food_count',$food2);
		}

		if($water < $water2){
			Session::flash('error_message', 'Not enough water!');
            return Redirect::back()->withInput();
		}else{
			DB::table('kingdom')
            	->where('id', $user->id)
            	->decrement('water_count',$water2);
		}


		//$iron1 = DB::table('kingdom')->where('id', 1)->pluck('count');

		//$puser = User::where('email','=',$femail)->first();

	
	try{
		// $trade = Trade::create([
		// 	//'posterID' => $user->id,
		// 	'posterID' => 1,
		// 	'acceptID' => 1,
  //       	'iron1' => $iron1,
  //       	'wood1' => $wood1,
  //       	'gold1' => $gold1,
  //       	'food1' => $food1,
  //       	'water1' => $water1,
  //       	'iron2' => $iron2,
  //       	'wood2' => $wood2,
  //       	'gold2' => $gold2,
  //       	'food2' => $food2,
  //       	'water2' => $water2
  //       ]);
		DB::table('trades')->insert([
		 			'posterID' => $user->id,
		 			'acceptID' => 1, 
		 			'iron1' => $iron1,
		 			'wood1' => $wood1,
		 			'gold1' => $gold1,
		 			'food1' => $food1,
		 			'water1' => $water1,
		 			'iron2' => $iron2,
		 			'wood2' => $wood2,
		 			'gold2' => $gold2,
		 			'food2' => $food2,
		 			'water2' => $water2
		 			]);
         }catch(Exception $e){
        	Session::flash('error_message', 
        	'Oops! Something is wrong');
        	return Redirect::back()->withInput();
        }
			
		return Redirect::to('/market');
		//return $wood;

	}
}