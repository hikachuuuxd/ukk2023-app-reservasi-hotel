<?php

namespace App\Http\Controllers;

use App\Models\Fasility;
use Illuminate\Http\Request;

class DashboardFasilityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.fasilities.index', [
            'fasilities' => Fasility::all()
            
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.fasilities.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|max:100',
        ]);

        // Room::create($validateData);
        $validateData = Fasility::create($request->all());
        return redirect('/dashboard/fasilities')->with('success', 'New Room has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fasility  $fasility
     * @return \Illuminate\Http\Response
     */
    public function show(Fasility $fasility)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fasility  $fasility
     * @return \Illuminate\Http\Response
     */
    public function edit(Fasility $fasility)
    {
        return view('dashboard.fasilities.edit', [
            'fasility' => $fasility
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Fasility  $fasility
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fasility $fasility)
    {
        $fasility = Fasility::find($fasility->id);
        
        $validateData = $request->validate([
            'name' => 'required|max:100',
        ]);

    
        Fasility::where('id', $fasility->id)->update($validateData);
    
        return redirect('/dashboard/fasilities')->with('success', 'New fasility has been update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fasility  $fasility
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fasility $fasility)
    {
        Fasility::destroy($fasility->id);
        return redirect('/dashboard/fasilities')->with('success', 'Data Berhasil di Hapus!');
    }
}
