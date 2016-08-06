<?php

class MarketController extends BaseController {

	public function showMarketView(){
		$username = Auth::user();
		//return View::make('market');

		return View::make('market', [
			'username' => $username		
		]);
	}

	public function showTradeView(){
		$username = Auth::user();
		//return View::make('market');

		return View::make('trade', [
			'username' => $username		
		]);
	}


	


}