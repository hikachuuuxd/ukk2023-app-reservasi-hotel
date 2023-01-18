<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fasility extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function rooms(){

        return $this->belongsToMany(Room::class, 'fasility_room', 'fasility_id', 'room_id');
    }
}
