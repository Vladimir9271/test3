<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mission extends Model
{
    protected $fillable = ['name', 'launch_date', 'launch_site', 'latitude', 'longitude', 'duration_hours', 'duration_minutes', 'spacecraft_name', 'manufacturer', 'crew_capacity'];

    public function landing()
    {
        return $this->hasOne(Landing::class);
    }

    public function cosmonaut()
    {
        return $this->hasOne(Cosmonaut::class);
    }
}
