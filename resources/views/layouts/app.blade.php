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

    {{-- Styles --}}
    <link rel="stylesheet" href="{{ asset('css/stylesheet.css') }}">

    {{-- Fonts --}}


    {{-- Vite --}}
    {{-- @vite(['resources/js/app.ts']) --}}
</head>

<body>

    <header>
        @include('includes.header')
    </header>

    <main>


        <h1 id="Welcome">Colored Text, written in LESSCSS</h1>

        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Vel, quod deserunt officia ducimus ipsa soluta corporis provident libero,
            debitis sequi exercitationem explicabo, quasi autem unde quae totam recusandae
            est ipsum?
        </p>

        <div class="container">
            {{-- Homepage --}}
            <div class="home-container">
                @yield('HomePage')
            </div>

        </div>
    </main>

    <footer>
        @include('includes.footer')
    </footer>
</body>

</html>
