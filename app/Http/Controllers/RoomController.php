<?php

namespace App\Http\Controllers;
use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function show(){
        return view('room', [
            "title" => " kamar",
            "rooms"=> Room::latest()->get()
           
            
        ]);
    }

    public function getRouteKeyName(){
        return 'slug';
    }
}
