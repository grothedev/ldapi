<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title', 'body', 'lat', 'lon', 'user_id', 'parent_id'
    ];

    public function tags(){
    	return $this->hasMany('App\Tag');
    }

    public function user(){
    	return $this->belongsTo('App\User');
    }

    public function comments(){
    	return $this->hasMany('App\Post');
    }

    public function parent(){
    	return $this->belongsTo('App\Post');
    }

    public function files(){
    	return $this->hasMany('App\File');
    }
}
