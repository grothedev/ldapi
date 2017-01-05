<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $fillable = [
    	'name', 'description', 'user_id'
    ];

    public function tags(){
    	return $this->hasMany('App\Tag');
    }

    public function posts(){
    	return $this->belongsToMany('App\Post');
    }
}
