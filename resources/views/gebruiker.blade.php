<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gebruikers</title>
</head>

<body>
    @extends('layouts.app')

    @section('GebruikerPage')
        <h2>Welcome to the Gebruiker Page!</h2>
        <p>This is the main content of the gebruiker page.</p>
    @endsection


    @section('Registration')

        <h2>Account Registeren</h2>

        <form action="{{ route('register') }}" method="POST">
            @csrf
            {{-- De invoernaam is altijd vereist, zelfs met Laravel --}}
            <input name="name" type="text" placeholder="Username">
            <br><br>
            <input name="email" type="text" placeholder="Email">
            <br><br>
            <input name="password" type="password" placeholder="Password">
            <br><br>

        {{-- Rollen --}}
        <label>Kies een rol:</label><br>
        <input type="radio" id="admin" name="role" value="admin">
        <label for="admin">Admin</label><br>

        <input type="radio" id="uitvoerder" name="role" value="uitvoerder">
        <label for="uitvoerder">Uitvoerder</label><br>

        <input type="radio" id="werkvoorbereiding" name="role" value="werkvoorbereiding">
        <label for="werkvoorbereiding">Werkvoorbereiding</label><br><br>


        {{-- Registreerknop --}}
        <button type="submit">Registreren</button>
        </form>
    @endsection

</body>

</html>
