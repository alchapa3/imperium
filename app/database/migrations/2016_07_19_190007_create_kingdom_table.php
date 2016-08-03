<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKingdomTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('kingdom', function(Blueprint $table)
		{
			$table->increments('id');
			$table->text('kingdom_name');
			$table->text('flag');
			$table->integer('iron_count');
			$table->integer('wood_count');
			$table->integer('gold_count');
			$table->integer('food_count');
			$table->integer('water_count');
			$table->integer('population');
			$table->rememberToken();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('kingdom');
	}

}
