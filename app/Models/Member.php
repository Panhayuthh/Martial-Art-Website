<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable = ['member_role', 
                            'member_name', 
                            'member_profile', 
                            'member_school', 
                            'member_gender',
                            'member_belt', 
                            'member_medal'];

    // Relationship with Event
    public function event() {
        return $this->belongsTo(Event::class);
    }
}
