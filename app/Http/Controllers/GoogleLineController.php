<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
 
use App\Models\User;
use App\Models\Card;
 
use Carbon\Carbon;
 
class GoogleLineController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
 
     $data['lineChart'] = User::select(DB::raw("COUNT(*) as count"), DB::raw("DAYNAME(created_at) as day_name"),DB::raw('max(created_at) as createdAt'))
        ->whereYear('created_at', date('Y'))
        ->groupBy('day_name')
        ->orderBy('createdAt')
        ->get();
        $dara['lineCharts'] = Card::select(DB::raw("COUNT(*) as count"), DB::raw("DAYNAME(created_at) as day_name"),DB::raw('max(created_at) as createdAt'))
        ->whereYear('created_at', date('Y'))
        ->groupBy('day_name')
        ->orderBy('createdAt')
        ->get();
 if (
 auth()->user()->isAdmin)
        return view('dash', $data,$dara);
        else 
        return view('dashuser', $data);
 
    }
}