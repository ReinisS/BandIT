<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Band extends Model
{
    protected $fillable = [
        'name', 'description', 'privateinfo',
    ];
    
    public function user_bands() {
        return $this->hasMany('App\User_band');
    }
    
    public function band_events() {
        return $this->hasMany('App\Band_event');
    }
    
    public function managers() {
        return $this->hasMany('App\Manager');
    }
}
