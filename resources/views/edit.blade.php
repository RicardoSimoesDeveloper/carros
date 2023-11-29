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
        <header>
            <div class="cabecalho_edit" >
                <a href="{{ route('carros.show', $carros->id) }}"><i>Voltar</i></a>
                &nbsp;&nbsp; | &nbsp;
                <a href="{{ route('carros.index') }}"><i>Lista de carros</i></a>
                &nbsp;&nbsp; | &nbsp;
                <a href="{{ route('carros.welcome') }}" ><i>Início</i></a>
            </div>
        </header>

        @if ($errors->any())
            @foreach($errors->all() as  $error)
                {{ $error }}
            @endforeach
        @endif

        <form action=" {{ route('carros.update', $carros->id) }}" method="POST">
            @csrf()
            @method('PUT')

            <div class="adicionar_carro_edit">

                <h1 class="titulo_cadastro"><i>Editar o carro {{ $carros->marca . " " . $carros->modelo }}</i></h1>

                <label for="marca"><b> Marca </b> </label> <br>
                <input type="text" id="marca" name="marca" value="{{ $carros->marca }}"><br>
                
                <label for="modelo"> <b> Modelo  </b></label><br>
                <input type="text" id="modelo" name="modelo" value="{{ $carros->modelo }}"><br>
                
                <label for="ano"><b> Ano </b> </label> <br>
                <input type="text" id="ano" name="ano" value="{{ $carros->ano }}"><br>

                <label for="ano_modelo"><b> Ano do Modelo </b> </label> <br>
                <input type="text" id="ano_modelo" name="ano_modelo" value="{{ $carros->ano_modelo }}"><br>

                <label for="km"><b> km </b> </label> <br>
                <input type="text" id="km" name="km" value="{{ $carros->km }}"><br>

                <label for="tipo_combustivel"><b> Tipo de combustivel </b> </label> <br>
                <input type="text" id="tipo_combustivel" name="tipo_combustivel" value="{{ $carros->tipo_combustivel }}"><br>

                <label for="motor"><b> Potência do motor </b> </label> <br>
                <input type="text" id="motor" name="motor" value="{{ $carros->motor }}"><br>

                <label for="cor"><b> Cor </b> </label> <br>
                <input type="text" id="cor" name="cor" value="{{ $carros->cor }}"><br>

                <label for="tipo_direcao"><b> Tipo de direção </b> </label> <br>
                <input type="text" id="tipo_direcao" name="tipo_direcao" value="{{ $carros->tipo_direcao }}"><br>

                <label for="alarme"><b> Alarme </b> </label> <br>
                <input type="text" id="alarme" name="alarme" value="{{ $carros->alarme }}"><br>

                <label for="placa"><b> Placa </b> </label> <br>
                <input type="text" id="placa" name="placa" value="{{ $carros->placa }}"><br>

                <label for="valor"><b> Valor </b> </label> <br>
                <input type="text" id="valor" name="valor" value="{{ $carros->valor }}"><br>

                <label for="qntd_portas"><b> Quantidade de portas </b> </label> <br>
                <input type="text" id="qntd_portas" name="qntd_portas" value="{{ $carros->qntd_portas }}">

                <div class="button">
                    <button type="submit">Criar</button>
                </div>
                
            </div>
        </form>

        <footer>
            <div> Criado por Ricardo Simões 2023 </div>
        </footer>

    </body>
</html>