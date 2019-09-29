<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserPost extends Model
{
    protected $primaryKey='post_id';
    // return $this->belongsTo('App\User','post_creator','post_id');
}
