<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArtikelController extends Controller
{
    // Post validation request
    public function AddArtikel(Request $request)
    {
          
    //Artikel Opslaan in een Database
    $incomingFields = $request->validate([
    'artikelnaam'  => 'required',
    'artikelbeschrijving' => 'required',
    'leverancier'=> 'required',
    'emailadres'=> 'required',
    ]);


      // Prevent actual codes in a database such as html tags or malicious contents 
        $incomingFields['artikelnaam'] = strip_tags($incomingFields['artikelnaam']);
        $incomingFields['artikelbeschrijving'] = strip_tags($incomingFields['artikelbeschrijving']);
        $incomingFields['leverancier'] = strip_tags($incomingFields['leverancier']);
        $incomingFields['emailadres'] = strip_tags($incomingFields['emailadres']);

        // Create a Artikel
        Artikel::create($incomingFields);
        return redirect('/');

    }

}
