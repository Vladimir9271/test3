<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cosmonaut extends Model
{
    protected $fillable = ['mission_id', 'name', 'birthdate', 'rank', 'early_life', 'career', 'post_flight'];

    public function mission()
    {
        return $this->belongsTo(Mission::class);
    }
}
