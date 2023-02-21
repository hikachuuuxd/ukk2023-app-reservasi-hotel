<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Room;
use App\Models\User;
use Illuminate\Http\Request;


class DashboardOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Order $order)
    {
        $orders = Order::latest();
        if(request('search')){
            $orders->join('users', 'orders.user_id', '=', 'users.id')
                ->join('rooms', 'orders.room_id', '=', 'rooms.id')
                ->select('orders.*','users.name', 'rooms.name')
                ->where('Checkin','LIKE','%' .request('search'). '%' )
                ->orWhere('Checkout','LIKE','%' .request('search'). '%' )
                ->orWhere('status','LIKE','%' .request('search'). '%' )
                ->orWhere('users.name','LIKE','%' .request('search'). '%' )
                ->orWhere('rooms.name','LIKE','%' .request('search'). '%' );
        }
        return view('dashboard.orders.index', [
            'orders' => $orders->get(),
          
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.orders.create',[
            'rooms' => Room::all(),
            'users' => User::all()
        ]);
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
            'room_id' => 'required',
            'user_id' => 'required',
            'Checkin' => 'required',
            'Checkout' => 'required',
            'totalRoom' => 'required',
            
        ]);

        $order = new Order;
        $order->room_id = $request->room_id;
        $order->user_id = $request->user_id;
        $order->Checkin = $request->Checkin;
        $order->Checkout = $request->Checkout;
        $order->totalRoom = $request->totalRoom;

        $order->save();
        return redirect('dashboard/orders')->with('success', 'New Order has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        return view('dashboard.orders.edit', [
            'rooms' => Room::all(),
            'users' => User::all(),
            'order' => $order
            ]);
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


     $orders = Order::find($order->id);
        $orders->room_id = $request->room_id;
        $orders->user_id = $request->user_id;
        $orders->Checkin = $request->Checkin;
        $orders->Checkout = $request->Checkout;
        $orders->totalRoom = $request->totalRoom;

        $orders->save();
        return redirect('dashboard/orders')->with('success', 'New Order has been update!');

        // $order->status = 'konfirmasi';
        // $order->save();
        // return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        $order = Order::find($order->id);
        $order->delete();
        return redirect('dashboard/orders')->with('success', 'New Order has been delete!');
    }




}
