<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = ['id'];
    /**
    *The posts that belong to a PARTICULAR category
    */
    public function posts()
    {
        return $this->belongsToMany('App\Post')->withTimestamps();
    }
}
