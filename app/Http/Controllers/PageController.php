<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
     public function app() {
        return view('layouts.app');
    }

    public function home() {
        return view('home');
    }

       public function artikel() {
        return view('artikel');
    }


       public function leverancier() {
        return view('leverancier');
    }

}
