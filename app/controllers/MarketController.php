<?php

class MarketController extends BaseController {

	public function showMarketView(){
		$username = Auth::user();

		$posts = Trade::all();

		
		if($posts == '[]'){
			return View::make('market', [
			'username' => $username,
			'posts'	=> $posts
		
		 ]);
		}else{
			foreach($posts as $post){
				$names[$post->id] = User::where('id','=',$post->posterID)->pluck('kingdom_name');
			}

			return View::make('market', [
				'username' => $username,
				'posts'	=> $posts,
				'names' => $names
		 	]);
		}
	}

	public function acceptTrade(){
		$user = Auth::user();

		//What logged in user has
		$iron = Kingdom::where('UID', '=', $user->id)->pluck('iron_count');
		$wood = Kingdom::where('UID', '=', $user->id)->pluck('wood_count');
		$gold = Kingdom::where('UID', '=', $user->id)->pluck('gold_count');
		$food = Kingdom::where('UID', '=', $user->id)->pluck('food_count');
		$water = Kingdom::where('UID', '=', $user->id)->pluck('water_count');

		$PID = Input::get('id');
		$trade = Trade::where('id', '=', $PID)->get();
		$posterID = Trade::where('id', '=', $PID)->pluck('posterID');

		//What logged in user is GIVING
		$iron1 = DB::table('trades')->where('id', $PID)->pluck('iron1');
		$wood1 = DB::table('trades')->where('id', $PID)->pluck('wood1');
		$gold1 = DB::table('trades')->where('id', $PID)->pluck('gold1');
		$food1 = DB::table('trades')->where('id', $PID)->pluck('food1');
		$water1 = DB::table('trades')->where('id', $PID)->pluck('water1');

		//What logged in user is RECEIVING
		$iron2 = DB::table('trades')->where('id', $PID)->pluck('iron2');
		$wood2 = DB::table('trades')->where('id', $PID)->pluck('wood2');
		$gold2 = DB::table('trades')->where('id', $PID)->pluck('gold2');
		$food2 = DB::table('trades')->where('id', $PID)->pluck('food2');
		$water2 = DB::table('trades')->where('id', $PID)->pluck('water2');


		if($iron < $iron1){
			Session::flash('error_message', 'Not enough iron!');
            return Redirect::back()->withInput();
		}else{
			DB::table('kingdom')
            	->where('id', $user->id)
            	->decrement('iron_count',$iron1);

            DB::table('kingdom')
            	->where('id', $user->id)
            	->increment('iron_count',$iron2);

            DB::table('kingdom')
            	->where('id', $posterID)
            	->increment('iron_count',$iron1);
		}

		if($wood < $wood1){
			Session::flash('error_message', 'Not enough wood!');
            return Redirect::back()->withInput();
		}else{
			DB::table('kingdom')
            	->where('id', $user->id)
            	->decrement('wood_count',$wood1);

            DB::table('kingdom')
            	->where('id', $user->id)
            	->increment('wood_count',$wood2);

            DB::table('kingdom')
            	->where('id', $posterID)
            	->increment('wood_count',$wood1);
		}

		if($gold < $gold1){
			Session::flash('error_message', 'Not enough gold!');
            return Redirect::back()->withInput();
		}else{
			DB::table('kingdom')
            	->where('id', $user->id)
            	->decrement('gold_count',$gold1);

            DB::table('kingdom')
            	->where('id', $user->id)
            	->increment('gold_count',$gold2);

            DB::table('kingdom')
            	->where('id', $posterID)
            	->increment('gold_count',$gold1);
		}

		if($food < $food1){
			Session::flash('error_message', 'Not enough food!');
            return Redirect::back()->withInput();
		}else{
			DB::table('kingdom')
            	->where('id', $user->id)
            	->decrement('food_count',$food1);

            DB::table('kingdom')
            	->where('id', $user->id)
            	->increment('food_count',$food2);

            DB::table('kingdom')
            	->where('id', $posterID)
            	->increment('food_count',$food1);
		}

		if($water < $water1){
			Session::flash('error_message', 'Not enough water!');
            return Redirect::back()->withInput();
		}else{
			DB::table('kingdom')
            	->where('id', $user->id)
            	->decrement('water_count',$water1);

            DB::table('kingdom')
            	->where('id', $user->id)
            	->increment('water_count',$water2);

            DB::table('kingdom')
            	->where('id', $posterID)
            	->increment('water_count',$water1);
		}

		DB::table('trades')->where('id', '=', $PID)->delete();

			return Redirect::to('/market');
	
	}
}