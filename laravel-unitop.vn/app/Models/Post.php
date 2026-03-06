<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    //
    use SoftDeletes;
    protected $fillable = ['title', 'content', 'user_id', 'votes'];
    function FeaturedImage() {
        return $this->hasOne('App\Models\FeaturedImage');
    }

    function user() {
        return $this->belongsTo('App\Models\User');
    }
}
