<?php

namespace App\Http\Controllers;
use App\Models\Order;
use Illuminate\Http\Request;




class CetakController extends Controller
{
    public function cetak(Order $order){
            $order = Order::findOrFail($order->id);
            return view('rooms.orders.cetak',[
                'title' => 'Cetak',
                'order' => $order
            ]);

       }
}
