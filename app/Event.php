<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'name', 'date', 'place', 'description', 'public',
    ];
    
    public function user_events() {
        return $this->hasMany('App\User_event');
    }
    
    public function band_events() {
        return $this->hasMany('App\Band_event');
    }
    
    public function comments() {
        return $this->hasMany('App\Comment');
    }
    
    public function attendances() {
        return $this->hasMany('App\Attendance');
    }
    
}
