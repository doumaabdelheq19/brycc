<?php

namespace App\Http\Controllers;

use App\Models\artcile;
use App\Http\Requests\StoreartcileRequest;
use App\Http\Requests\UpdateartcileRequest;

class ArtcileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $artciles = artcile::all();
      return view('artcile.index',['artciles' => $artciles]);
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('artcile.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreartcileRequest $request)
    {
        $card = artcile::create(['title' => $request->title,
        'descrip'=> $request ->descrip,
       
        'user_id' =>auth()->id() ,
    ]);
    return response()->redirectToRoute('artcile.index');


    }

    /**
     * Display the specified resource.
     */
    public function show(artcile $artcile)
    {
        return view('artcile.show',compact('artcile'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(artcile $artcile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateartcileRequest $request, artcile $artcile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(artcile $artcile)
    {
        //
    }
}
