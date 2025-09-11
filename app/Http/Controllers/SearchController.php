<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Artikel;

class SearchController extends Controller
{
    public function my_search(Request $request) {
        $search = $request->search;

        // $search comes from the user's input in the search bar
       // Query the 'artikels' table to search multiple columns
        
       $artikels = Artikel::where(function($query) use ($search) {
        $query->where('artikelnaam', 'LIKE', "%{$search}%")           // Search in artikelnaam
          ->orWhere('artikelbeschrijving', 'LIKE', "%{$search}%") // Or search in artikelbeschrijving
          ->orWhere('leverancier', 'LIKE', "%{$search}%");       // Or search in leverancier
        })->get(); // Execute the query and get all matching results

        return view('artikel', compact('artikels'));    
    }  
}
 