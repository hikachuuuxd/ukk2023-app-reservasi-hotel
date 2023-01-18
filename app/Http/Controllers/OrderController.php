<?php

namespace App\Http\Controllers;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function show(){
        return view('order', [
            'title' => "Pemesanan",
            'order' => Order::find(2)
        ]);
    }
    public function showUser(){
        return view('user', [
            'title' => "Pemesanan",
            'order' => Order::find(2)
        ]);
    }
}
