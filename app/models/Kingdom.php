<?php

class Kingdom extends Eloquent  {

	protected $table = 'kingdom';

	protected $fillable = ['UID','iron_count','wood_count','gold_count','food_count','water_count','population'];

}