<?php

namespace App\Models;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Room extends Model
{
    use HasFactory, Sluggable;
    protected $guarded = ['id'];
    protected $with = ['fasilities'];

    public function fasilities(){

        return $this->belongsToMany(Fasility::class, 'fasility_rooms', 'room_id', 'fasility_id');
    }
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    
}
