<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'password', 'role', 
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function isAdmin() {
        return ($this->role == 2);
    }        
    
    public function user_events() {
        return $this->hasMany('App\User_event');
    }
    
    public function user_bands() {
        return $this->hasMany('App\User_band');
    }
}
