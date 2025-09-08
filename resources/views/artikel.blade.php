<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

  @extends('layouts.app')

@section('ArtikelPage')
    <h2>Artikel Formulier</h2>

    {{-- Add a product --}}
  <div style="border: 3px solid black">
  <h2>Add a new Product</h2>

  <form action="/AddProduct" method="POST">
    {{-- CSRF should always after the form, otherwise it won't connect --}}
      @csrf 
  <input type="text" name="title" placeholder="product title">
    <textarea name="body" placeholder="Product content..."></textarea>
    <button>Save Product</button>
  </div>
  </form>
@endsection
    
</body>
</html>