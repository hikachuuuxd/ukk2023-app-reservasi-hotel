<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use App\Models\Room;
use App\Models\Fasility;
use App\Models\FasilityRoom;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class DashboardRoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
   
        
        return view('dashboard.rooms.index', [
            'rooms' => Room::all()
            
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $fasilities = Fasility::all();
        return view('dashboard.rooms.create', compact('fasilities'));
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
            'name' => 'required|max:100',
            'slug' => 'required|unique:rooms',
            'description' => 'required',
            'price' => 'required|numeric',
            'total'=> 'required|numeric',
            'image' => 'image|file|max:1024'
        ]);
        
        $room = new Room;
        $room->name = $request->name;
        $room->slug = $request->slug;
        $room->description = $request->description;
        $room->price = $request->price;
        $room->total = $request->total;
        $room->image = $request->file('image')->store('room-image');

  
        $room->save();
        $room->fasilities()->attach($request->input('fasility_id'));
        return redirect('/dashboard/rooms')->with('success', 'New Room has been added!');

        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function show(Room $room)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function edit(Room $room)
    {
        
        $fasilities = Fasility::all();
        return view('dashboard.rooms.edit', compact('fasilities', 'room'),[
            
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Room $room)
    {

         $room = Room::find($room->id);
        

        $rules = [
            'name' => 'required|max:100',
            'description' => 'required',
            'price' => 'required|numeric',
            'total'=> 'required|numeric',
            'image' => 'required'
        ];

        if($request->slug != $room->slug ){
            $rules['slug'] = 'required|unique:rooms';
        }
        $validateData = $request->validate($rules);
        Room::where('id', $room->id)->update($validateData);
        // $room->fasilities()->updateExistingPivot('fasility_id', [
        //     'name' => $request->name,
        //     'slug' => $request->slug,
        //     'description' => $request->description,
        //     'price' => $request->price,
        //     'total'=> $request->total,
        //     'image' => $request->image
        // ]);
       

        $room->fasilities()->sync($request->input('fasility_id'));
        return redirect('/dashboard/rooms')->with('success', 'New Room has been update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function destroy(Room $room)
    {

        if($room->image){
            Storage::delete($room->image);
        }
         Room::destroy($room->id);
        $room->fasilities()->detach('fasility_id');
        return redirect('/dashboard/rooms')->with('success', 'Data Berhasil di Hapus!');
    }

    public function checkSlug(Request $request){
        

        $slug = SlugService::createSlug(Room::class, 'slug', $request->name);
        return response()->json(['slug' => $slug ]);
    }

 
}
