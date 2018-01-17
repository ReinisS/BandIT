<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{
    public function band() { 
        return $this->belongsTo('App\Band');
    }
    
    public function user() { 
        return $this->belongsTo('App\User');
    }
    
}
