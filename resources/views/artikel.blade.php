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

        <h2>Add a new Product</h2>

        <form action="/AddArtikel" method="POST">
            {{-- CSRF should always after the form, otherwise it won't connect --}}
            @csrf
            <input type="text" name="artikelnaam" placeholder="Artikelnaam">
            <br><br>
            <textarea name="artikelbeschrijving" placeholder="Artikelbeschrijving"></textarea>
            <br><br>
            <input type="text" name="leverancier" placeholder="Leveranciernaam">
            <br><br>
            <button>Save Product</button>
        </form>
    @endsection


  @section('ViewArtikel')
    <div class="AllArtikelen">
      <h2>Alle Artikelen</h2>

      <div class="ArtikelContainer">
        <div class="ArtikelBox">
         
        </div>

        <div class="ArtikelBox">
        
        </div>

        <div class="ArtikelBox">
           
        </div>
      </div>
      
    </div>


    
  @endsection


</body>

</html>
