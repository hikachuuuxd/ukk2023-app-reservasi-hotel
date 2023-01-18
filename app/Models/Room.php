<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function fasilities(){

        return $this->belongsToMany(Fasility::class, 'fasility_rooms', 'room_id', 'fasility_id');
    }

    
}
