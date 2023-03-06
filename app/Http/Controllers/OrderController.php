<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Room;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Order $order)
    {
        
        $order = Order::all();
        
        return view('rooms.orders.index', [
            
            'title' => 'Orders',
            'orders' => $order
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     $request->validate([
            'Checkin' => 'required',
            'Checkout' => 'required',
            'totalRoom' => 'required',
            
        ]);
        $room = Room::find('room_id');
        $order = new Order;
       
        $order->Checkin = $request->Checkin;
        $order->Checkout = $request->Checkout;
        $order->totalRoom = $request->totalRoom;
        $order->room_id = $request->room_id;
        $order->user_id = auth()->user()->id;

        
     
        $order->save();
        return redirect('/orders/'.$order->id)->with('success', 'Pesanan berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        
       Order::findOrFail($order->id);
      if( auth()->user()->name !== $order->user->name){
        abort(403);
    }
    
      
        return view('rooms.orders.show',[
            'order' => $order,
          
            'title' => 'Order'
            
        ] );

    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        $request->validate([
            'Checkin' => 'required',
            'Checkout' => 'required',
            'totalRoom' => 'required',
            
        ]);
        $room = Room::find('room_id');
        $order = Order::find($order->id);
        $order->Checkin = $request->Checkin;
        $order->Checkout = $request->Checkout;
        $order->totalRoom = $request->totalRoom;
        $order->user_id = auth()->user()->id;

        
     
        $order->save();
        return back()->with('success', 'Pemesanan Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        Order::destroy($order->id);
        return redirect('/orders')->with('success', 'Data Berhasil di Hapus!');
    }

    public function cetak(Order $order){
        $order = Order::findOrFail($order->id);
        return view('rooms.orders.cetak',[
            'title' => 'Cetak',
            'order' => $order
        ]);

   }


     
}
