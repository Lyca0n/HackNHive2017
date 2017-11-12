<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\PatientProfile;
use App\PhysicianProfile;

class Consultation extends Model
{
    protected $table= "consultations";
    protected $fillable = [
        'symptoms','diagnose','medication'
    ];
    public function patientProfile()
    {
        return $this->hasOne('App\PatientProfile');
    }
    public function physicianProfile()
    {
        return $this->hasOne('App\PhysicianProfile');
    }
}
