<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tasks extends Model
{
    public function tags () {
		$this->belongsToMany('\App\Tag');
	}
	public function lanes () {
		$this->belongsTo('\App\Lane');
	}
}
