<?php
    
namespace App\Http\Controllers;
    
use Illuminate\Http\Request;
use App\Models\User;
  
class GoogleController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function googleLineChart()
    {
        $visitors = User::select("created_at", "id", "name")->get();
  
        $result[] = ['Dates','Clicks','Viewers'];
        foreach ($visitors as $key => $value) {
            $result[++$key] = [$value->visit_date, (int)$value->click, (int)$value->viewer];
        }
    
        return view('googleChart', compact('result'));
    }
}