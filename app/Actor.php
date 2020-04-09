<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{     public $guarded = [];

     public function movies(){
      return $this->belongsToMany(Movie::class, 'actor_movie','actor_id','movie_id');
    }
    public function actors(){
        return $this->belongsToMany(Actor::class,'actor_movie','movie_id','actor_id');
     }
}
