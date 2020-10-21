<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotels extends Model
{
    protected $guarded = array('id');

     public static $rules = array(
        'num_of_guests' => 'numeric',
        'arrival' => 'required',
        'departure' => 'required'
    );
}
