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

		$iron_count = DB::table('kingdom')->where('id', $username->id)->pluck('iron_count');
		$wood_count = DB::table('kingdom')->where('id', $username->id)->pluck('wood_count');
		$gold_count = DB::table('kingdom')->where('id', $username->id)->pluck('gold_count');
		$food_count = DB::table('kingdom')->where('id', $username->id)->pluck('food_count');
		$water_count = DB::table('kingdom')->where('id', $username->id)->pluck('water_count');

		$smith = DB::table('producers')->where('id', $username->id)->pluck('smith');
		$lumbermill = DB::table('producers')->where('id', $username->id)->pluck('lumbermill');
		$mine = DB::table('producers')->where('id', $username->id)->pluck('mine');
		$farm = DB::table('producers')->where('id', $username->id)->pluck('farm');
		$well = DB::table('producers')->where('id', $username->id)->pluck('well');

		$population = DB::table('kingdom')->where('UID', $username->id)->pluck('population');

		$kingdom_name = Auth::user();

		return View::make('home', [
			'username' => $username,
			'kingdom_name' => $kingdom_name,
			'iron_count' => $iron_count,
			'wood_count' => $wood_count,
			'gold_count' => $gold_count,
			'food_count' => $food_count,
			'water_count' => $water_count,
			'smith' => $smith,
			'lumbermill' => $lumbermill,
			'mine' => $mine,
			'farm' => $farm,
			'well' => $well,
			'population' => $population
			
		]);

	}

	

}
