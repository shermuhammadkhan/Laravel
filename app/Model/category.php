<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{

    public function posts()
    {
    	return $this->belongsToMany('App\Model\user\post','category_posts' , "post_id" , "id");
    }

    public function getRouteKeyName()
    {
    	return 'slug';
    }
}
