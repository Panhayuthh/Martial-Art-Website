<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Athlete extends Model
{
    use HasFactory;

    protected $fillable = ['athlete_name', 'athlete_school', 'athlete_photo', 'athlete_gender', 'athlete_medal'];

    // Relationship with Event
    public function event() {
        return $this->belongsTo(Event::class);
    }
}
