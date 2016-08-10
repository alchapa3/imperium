<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTradeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trades', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('posterID');
			$table->integer('acceptID');
			$table->integer('iron1');
			$table->integer('wood1');
			$table->integer('gold1');
			$table->integer('food1');
			$table->integer('water1');
			$table->integer('iron2');
			$table->integer('wood2');
			$table->integer('gold2');
			$table->integer('food2');
			$table->integer('water2');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('trades');
	}

}
