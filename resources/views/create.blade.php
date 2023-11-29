
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
            <div class="cabecalho" >
                <a href="{{ route('carros.welcome') }}" ><i>Início</i></a>
            </div>
        </header>

        @if ($errors->any())
            @foreach($errors->all() as  $error)
                {{ $error }}
            @endforeach
        @endif

        <form action=" {{ route('carros.store') }}" method="POST">
            @csrf()
            <div class="adicionar_carro">

                <h1 class="titulo_cadastro"><i>Adicionar carro</i></h1>

                <label for="marca"><b> Marca </b> </label> <br>
                <input type="text" id="marca" name="marca"><br>
                
                <label for="modelo"> <b> Modelo  </b></label><br>
                <input type="text" id="modelo" name="modelo"><br>
                
                <label for="ano"><b> Ano </b> </label> <br>
                <input type="text" id="ano" name="ano"><br>

                <label for="ano_modelo"><b> Ano do Modelo </b> </label> <br>
                <input type="text" id="ano_modelo" name="ano_modelo"><br>

                <label for="km"><b> km </b> </label> <br>
                <input type="text" id="km" name="km"><br>

                <label for="tipo_combustivel"><b> Tipo de combustivel </b> </label> <br>
                <input type="text" id="tipo_combustivel" name="tipo_combustivel"><br>

                <label for="motor"><b> Potência do motor </b> </label> <br>
                <input type="text" id="motor" name="motor"><br>

                <label for="cor"><b> Cor </b> </label> <br>
                <input type="text" id="cor" name="cor"><br>

                <label for="tipo_direcao"><b> Tipo de direção </b> </label> <br>
                <input type="text" id="tipo_direcao" name="tipo_direcao"><br>

                <label for="alarme"><b> Alarme </b> </label> <br>
                <input type="text" id="alarme" name="alarme"><br>

                <label for="placa"><b> Placa </b> </label> <br>
                <input type="text" id="placa" name="placa"><br>

                <label for="valor"><b> Valor </b> </label> <br>
                <input type="text" id="valor" name="valor"><br>

                <label for="qntd_portas"><b> Quantidade de portas </b> </label> <br>
                <input type="text" id="qntd_portas" name="qntd_portas">

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