<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = ['id'];
  /**
  *The categories that belong to a PARTICULAR post
  */
  public function categories()
  {
      return $this->belongsToMany('App\Category')->withTimestamps();
  }

  public function comments()
  {
    return $this->morphMany('App\Comment', 'post');
  }

}
