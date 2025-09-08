<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArtikelController extends Controller
{
    // Post validation request
    public function AddProduct(Request $request)
    {
        // Validate incoming request
        $incomingFields = $request->validate([
            'productnaam' => 'required',
            'productbeschrijving' => 'required',
            'leverancier' => 'required',
            'emailadres' => 'required|email',
        ]);

        // Prevent HTML/malicious content
        $incomingFields['productnaam'] = strip_tags($incomingFields['productnaam']);
        $incomingFields['productbeschrijving'] = strip_tags($incomingFields['productbeschrijving']);
        $incomingFields['leverancier'] = strip_tags($incomingFields['leverancier']);
        $incomingFields['emailadres'] = strip_tags($incomingFields['emailadres']);

        // Add authenticated user id
        $incomingFields['user_id'] = Auth::id();

        // Create the artikel
        Artikel::create($incomingFields);

        return redirect('/');
    }
}
