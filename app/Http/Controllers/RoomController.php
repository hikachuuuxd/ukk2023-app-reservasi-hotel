<?php

namespace App\Http\Controllers;
use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{

    public function index(){
        return view('rooms', [
            'title' => 'kamar', 
            'rooms' => Room::latest()->get()
        ]);
    }
    public function show(Room $room){
        return view('kamar', [
            "title" => " kamar",
            "room"=> $room 
           
        ]);
    }

  
    public function getRouteKeyName(){
        return 'slug';
    }
}
