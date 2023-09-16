<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\card;
use Illuminate\View\View;
  
class searchcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('search.index');
    }
    
    public function search(Request $request)
    {
        $query = $request->input('query');
        $results = Card::where(function ($queryBuilder) use ($query) {
            $queryBuilder->where('category', 'LIKE', "%$query%")
                         ->orWhere('title', 'LIKE', "%$query%")
                         ->orWhere('description', 'LIKE', "%$query%");
            // Add more 'orWhere' clauses for each column you want to search
        })->get();
    
        return view('search.results', compact('results','query'));
    }
}