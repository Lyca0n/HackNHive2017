<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhysicianProfile extends Model
{
    protected $table="physician_profiles";
    protected $fillable = [
        'name','lastname','sex','speciality','location','zip','phone','cedule','user_id'
    ];
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}

