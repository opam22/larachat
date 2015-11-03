<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
     protected $fillable = [
    	'chat',
    	'user_id',
    	
    ];
}
