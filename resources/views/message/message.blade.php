<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>
    </body>
</html>

@if(session('sucesso'))
    <p id="msg" style="color: rgb(20, 151, 16); text-align:center;">{{ session('sucesso')}}</p>
@endif

@if(session('editado'))
    <p id="msg" style="color: rgb(20, 151, 16); text-align:center;">{{ session('editado')}}</p>
@endif

@if(session('deletado'))
    <p id="msg" style="color: red; text-align:center;">{{ session('deletado')}}</p>
@endif