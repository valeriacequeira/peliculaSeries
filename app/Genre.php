<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
  public $guarded = [];

  public function genre(){
  return $this->belongsTo(Genre::class,'genre_id');
 }

  public function actors(){
  return $this->belongsToMany(Actor::class,'actor_movie','movie_id','actor_id');
 }
}
