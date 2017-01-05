<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = [
    	'text'
	];

	public function posts(){
		return $this->belongsToMany('App\Post');
	}

	public function files(){
		return $this->belongsToMany('App\File');
	}
}
