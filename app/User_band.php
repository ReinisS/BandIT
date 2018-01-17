<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_band extends Model
{
    public function user() { 
        return $this->belongsTo('App\User');
    }
    
    public function band() { 
        return $this->belongsTo('App\Band');
    }
}
