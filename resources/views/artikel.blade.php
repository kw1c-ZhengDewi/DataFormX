<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Artikelen</title>
</head>

<body>
    @extends('layouts.app')

    @section('AddArtikel')
        {{-- Add a product --}}

        <h2>Voeg een nieuw Artikel</h2>

    <form action="{{ route('artikels.add') }}" method="POST">            
      {{-- CSRF should always after the form, otherwise it won't connect --}}
            @csrf
            <input type="text" name="artikelnaam" placeholder="Artikelnaam" style="width: 250px;height: 30px;">
            <br><br>
            
            <!-- Use textarea for artikelbeschrijving -->
            <textarea name="artikelbeschrijving" placeholder="Artikelbeschrijving" 
              style="width: 250px; height: 100px; resize: vertical;"></textarea>         
              
            <br><br>
            <input type="text" name="leverancier" placeholder="Leveranciernaam" style="width: 250px;height: 30px;">
            <br><br>
            <input type="email" name="emailadres" placeholder="Emailadres" style="width: 250px;height: 30px;">
            <br><br>
            <button type="submit">Artikel Opslaan</button>
        </form>
    @endsection


  @section('ViewArtikel')
  <div class="AllProducts">

      <h2>Alle Artikelen</h2>

      <form class="SearchForm" action="{{ url('my_search') }}" method="GET">
      <input type="search" name="search">
      <input type="submit" value="Search">
      </form>
      
       {{-- Check if any articles exist --}}
    @if($artikels->isEmpty())
        <h2>Geen artikels gevonden.</h2>

        
    @else  {{-- Hier wordt alle items geloopt --}}
  @foreach($artikels as $artikel)
  {{-- Artikel Container --}}
     <div class="ArtikelContainer">
        <div class="ArtikelBox">
        <h3>Artikelnaam: <span class="DatabaseInfo">{{$artikel->artikelnaam}}</span></h3>  
        <p>Artikelbeschrijving: <span class="DatabaseInfo">{{$artikel->artikelbeschrijving}}</span></p>
        <p>Leverancier: <span class="DatabaseInfo">{{$artikel->leverancier}}</span></p>
        </div>
     </div>
    @endforeach
  @endif
      </div>
  @endsection
</body>

</html>
