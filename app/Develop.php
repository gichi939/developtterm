<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Develop extends Model
{
    protected $guarded = array('id');
    
    public static $rules = array(
        'prefectures' => 'required',
        'body' => 'required',
    );
    
    // public function favorite_users()
    // {
    //         return $this->belongsToMany(User::class,'favorites','movie_id','user_id')->withTimestamps();
    // }
}

