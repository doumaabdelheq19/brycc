<?php

namespace App\Http\Controllers;



use App\Models\Card;
use App\Http\Requests\StoreCardRequest;
use App\Http\Requests\UpdateCardRequest;
use App\Models\Country;
use App\Models\currency;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
        $counteries = Country::all();
        $currencies = currency::all();
        return view('card.create',['counteries' => $counteries,'currency' => $currencies  ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    
    public function store(StoreCardRequest $request)
    {

        $card = card::create(['title' => $request->title,
        'description'=> $request ->description,
        'attachement' => $request ->attachement,
        'category' => $request ->category,
        'Amountunit' => $request ->Amountunit,
        'Amount' => $request ->Amount,
        'currency' => $request ->currency,
        'typeoffer' => $request ->typeoffer,
        'price' => $request ->price,
        'exchange' => $request ->exchange,
        'country' => $request ->country,
        'city' => $request ->city,
        'region' => $request ->region,
        'user_id' =>auth()->id() ,
     

        
        ]);
        DB::table('updates')->upsert(
            [
                ['stak' => ''.$request->title.' New announcement in Brecycler',],
               
            ],
            ['stak']
        );
        
     
        $filename = $request->file('attachement')->getClientOriginalName();
        
 
        
        $path = $request->file('attachement')->storeAs('public', $filename);
        $card->update(['attachement' => $filename]);
 
 
  
    
        

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
        $request->file('attachement')->store('attachements');
        $card->update($request->validated());
        return response()->redirectToRoute('card.index');
    }

    /**
     * Remove the specified resource from storage.
     */ 
    public function destroy( $id)
    {
        $row = Card::find($id);

        // Check if the row exists
        if (!$row) {
            return redirect()->back()->with('error', 'Row not found.');
        }
    
        // Delete the row
        $row->delete();
    
        return redirect()->back()->with('success', 'Row deleted successfully.');
    }

 
}