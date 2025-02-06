<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Landing extends Model
{
    protected $fillable = ['mission_id', 'date', 'site_name', 'country', 'latitude', 'longitude', 'parachute_landing', 'impact_velocity_mps'];

    public function mission()
    {
        return $this->belongsTo(Mission::class);
    }
}
