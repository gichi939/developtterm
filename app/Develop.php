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
}
