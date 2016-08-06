<?php

class HomeController extends BaseController {


	public function showUserProfile($uid){

		if(!Auth::check()){
			return Redirect::to('/login');
		}

		//return a count of # of users with $uid ideally 0 or 1. 
		$count = User::where('id', '=', $uid)->count();

		//no such user found
		if($count == 0){ 
			return Redirect::to('/feed');
		}

		//single row
		$profile_user = User::where('id', '=', $uid)->first();

		//current user
		$user = Auth::user();


		//create profile view
		return View::make('profile', [
			'profile_user'	=> $profile_user,
			'user'	=> $user
		]);

	}

	public function showHome(){
		if(!Auth::check()){
			return Redirect::to('/login');
		}

		$username = Auth::user();

		//$kingdom_name = Post::where('kingdom_name', '=', $kingdom_name)->first();

		$kingdom_name = Auth::user();

		return View::make('home', [
			'username' => $username,
			'kingdom_name' => $kingdom_name
			
		]);

	}

	public function buttonCount1(){

		//DB::table('buttons')->increment('count', 1, array('id' => 1));
		if(id == "button1"){
			DB::table('buttons')
				->where('id', 1)
				->increment('count', 1);

			return Redirect::to('/feed');
		}

		if(id == "button2"){
			DB::table('buttons')
				->where('id', 2)
				->increment('count', 1);

			return Redirect::to('/feed');
		}

		if(id == "button3"){
			DB::table('buttons')
				->where('id', 3)
				->increment('count', 1);

			return Redirect::to('/feed');
		}

		if(id == "button4"){
			DB::table('buttons')
				->where('id', 4)
				->increment('count', 1);

			return Redirect::to('/feed');
		}

		if(id == "button5"){
			DB::table('buttons')
				->where('id', 5)
				->increment('count', 1);

			return Redirect::to('/feed');
		}

	}

	public function buttonCount2(){

		//DB::table('buttons')->increment('count', 1, array('id' => 1));

		DB::table('buttons')
			->where('id', 2)
			->increment('count', 1);

		return Redirect::to('/feed');

	}

	public function buttonCount3(){

		//DB::table('buttons')->increment('count', 1, array('id' => 1));

		DB::table('buttons')
			->where('id', 3)
			->increment('count', 1);

		return Redirect::to('/feed');

	}

	public function buttonCount4(){

		//DB::table('buttons')->increment('count', 1, array('id' => 1));

		DB::table('buttons')
			->where('id', 4)
			->increment('count', 1);

		return Redirect::to('/feed');

	}

	public function buttonCount5(){

		//DB::table('buttons')->increment('count', 1, array('id' => 1));

		DB::table('buttons')
			->where('id', 5)
			->increment('count', 1);

		return Redirect::to('/feed');

	}

}
