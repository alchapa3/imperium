<?php

class Trade extends Eloquent  {

	protected $table = 'trades';

	protected $fillable = ['posterID','acceptID','iron1','wood1','gold1','food1','water1','iron2','wood2','gold2','food2','water2'];

}