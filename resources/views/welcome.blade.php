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
   
    <body>

        <div class="container_lista">
            <h2 class="titulo"><i>Lista de carros</i></h2>
            <p>Clique <a href="{{ route('carros.index') }}" ><u><b><i>aqui</i></b></u></a> para visualizar a lista de carros.</p>
        </div>

        <div class="container_adicionar">
            <h2 class="titulo"><i>Criar novo carro</i></h2>
            <p>Clique <a href="{{ route('carros.create') }}" ><u><b><i>aqui</i></b></u></a> para fazer novo cadastro de carro.</p>
        </div>

        <footer>
            <div> Criado por Ricardo Simões 2023 </div>
        </footer>
        
    </body>
</html>
