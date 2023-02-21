<?php

namespace App\Http\Controllers;
use App\Models\Room;
use App\Models\Order;
use Illuminate\Http\Request;

class RoomController extends Controller
{

    public function index(Request $request  ){
        $room = Room::latest();
        if(request('search')){
            $room->select('name')
                ->where('name','LIKE','%' .request('search'). '%' );

        }
        return view('rooms.rooms', [
            'title' => 'kamar', 
            'rooms' => $room->get()
        ]);
    }
    public function show(Room $room){
        
        
        return view('rooms.room', [
            "title" => " kamar",
            "room"=> $room,
            "orders" => Order::all()
            
            
           
        ]);
    }

  
    public function getRouteKeyName(){
        return 'slug';
    }
}
