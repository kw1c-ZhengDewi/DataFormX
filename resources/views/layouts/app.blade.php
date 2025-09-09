<!DOCTYPE html>
<html lang="en">

{{-- 
Auteur: Dewi Hu
Framework: Laravel
Datum: 08-09-2025
--}}

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Dewi Hu">
    <title>DataForm</title>

    {{-- Favicon --}}

    {{-- Stylesheet --}}
    <link rel="stylesheet" href="{{ asset('css/stylesheet.css') }}">

    {{-- Vite --}}
       {{-- @vite(['resources/js/app.ts']) --}}

    {{-- Fonts --}}

  
</head>

<body>
    @auth
    <header>
        @include('includes.header')
    </header>

    
    <main>
        <div class="container">
            {{-- Homepage --}}
            <div class="home-container">
                @yield('HomePage')
            </div>

            <div class="artikelen-container">
                {{-- Form met alle artikelen --}}
                @yield("AddArtikel")
                @yield("ViewArtikel")
            </div>

            <div class="leverancier-container">
                @yield('LeverancierPage')

                {{-- Form met alle leveranciers --}}
                 @yield("Form-Leveranciers")
            </div>
        </div>
    </main>

    <footer>
        @include('includes.footer')
    </footer>
    @endauth
</body>

</html>
