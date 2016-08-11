<?php

class MarketController extends BaseController {

	public function showMarketView(){
		$username = Auth::user();

		//$food_count = DB::table('users')->where('id', 1)->pluck('food_count');
		//$username = User::where('UID', '=', )->get();
		//return View::make('market');

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

	
}