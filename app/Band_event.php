<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Band_event extends Model
{
    public function band() { 
        return $this->belongsTo('App\Band');
    }
    
    public function event() { 
        return $this->belongsTo('App\Event');
    }
}
