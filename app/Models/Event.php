<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 
        'event_photo', 
        'place'
    ];

    /**
     * Define the relationship with Athlete.
     */
    public function athletes()
    {
        return $this->hasMany(Athlete::class);
    }
}
