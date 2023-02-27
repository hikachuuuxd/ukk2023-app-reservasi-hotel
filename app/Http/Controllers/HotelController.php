<?php

namespace App\Http\Controllers;
use App\Models\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function index(){
        return view('hotels.hotel',[
            'title' => 'Fasilitas Hotel',
            'hotels' => Hotel::all()
        ]);
    }
}
