<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PatientProfile extends Model
{
    protected $table="patient_profiles";
    protected $fillable = [
        'name','profilepicture','lastname','birthdate','bloodtype','sex','location','zip','curp','phone'
    ];
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
