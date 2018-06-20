<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use App\PatientProfile;
use App\PhysicianProfile;
class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function patientProfile(){
        return $this->hasOne('App\PatientProfile','user_id');
    }
    
    public function physicianProfile(){
        return $this->hasOne('App\PhysicianProfile');
    }
}
