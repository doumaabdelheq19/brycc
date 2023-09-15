<?php

namespace App\Http\Controllers;



use App\Models\Card;
use App\Http\Requests\StoreCardRequest;
use App\Http\Requests\UpdateCardRequest;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;


class CardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cards = card::all();
      return view('card.index',['cards' => $cards]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('card.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCardRequest $request)
    {

        $card = card::create(['title' => $request->title,
        'description'=> $request ->description,
        'attachment' => $request ->attachement,
        'category' => $request ->category,
        'Amountunit' => $request ->Amountunit,
        'Amount' => $request ->Amount,
        'currency' => $request ->currency,
        'typeoffer' => $request ->typeoffer,
        'price' => $request ->price,
        'exchange' => $request ->exchange,
        'user_id' =>auth()->id() 
        
        ]);
        if ($request->file('attachment')){
   $ext =$request->file('attachment')->extension();
        $contents = file_get_contents($request->file('attachment'));

        $filename = Str::random(25);
        $path = $request->file('attachemnt')->store('attachements');
        Storage::disk('public')->put($path, $contents);
        $card->update(['attachment' => $path]);
        }
   

    return response()->redirectToRoute('card.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Card $card)
    {
       
        return view('card.show',compact('card'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Card $card)
    {
       return view('card.edit',compact('card'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCardRequest $request, Card $card)
    {
        $card->update($request->validated());
        return response()->redirectToRoute('card.index');
    }

    /**
     * Remove the specified resource from storage.
     */ 
    public function destroy(Card $card)
    {
        $card->delete();
       return redirect(route('card.index'));
    }
}
