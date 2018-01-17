<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    protected $fillable = [
        'attendance', 
    ];
    
    public function user() { 
        return $this->belongsTo('App\User');
    }
    
    public function event() { 
        return $this->belongsTo('App\Event');
    }
}
