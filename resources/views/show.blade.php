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
               
                <a href="{{ route('carros.index') }}" ><i>Voltar</i></a>
                &nbsp;&nbsp; | &nbsp;
                <a href="{{ route('carros.welcome') }}" ><i>Início</i></a>
            </div>
        </header>

        <div>
            <table class="tabela_listagem">
                <thead>

                    <TR>
                        <TH colspan="15"><h2 class="titulo_listagem"><i>Detalhes do carro {{ $carros->marca . " " . $carros->modelo }}</i></h2></TH>
                        @include('message/message')
                    </TR>

                    <TR>
                        <TH>Marca</TH>
                        <TH>Modelo</TH>
                        <TH>Ano</TH>
                        <TH>Ano do modelo</TH>
                        <TH>Km</TH>
                        <TH>Tipo de combustivel</TH>
                        <TH>Potência do motor</TH>
                        <TH>Cor</TH>
                        <TH>Tipo de direção</TH>
                        <TH>Alarme</TH>
                        <TH>Placa</TH>
                        <TH>Valor</TH>
                        <TH>Quantidade de portas</TH>
                        <TH></TH>
                    </TR>
                </thead>

                <tbody>
                    <TR>
                        <TD>{{ $carros->marca }}</TD>
                        <TD>{{ $carros->modelo }}</TD>
                        <TD>{{ $carros->ano }}</TD>
                        <TD>{{ $carros->ano_modelo }}</TD>
                        <TD>{{ $carros->km }}</TD>
                        <TD>{{ $carros->tipo_combustivel }}</TD>
                        <TD>{{ $carros->motor }}</TD>
                        <TD>{{ $carros->cor }}</TD>
                        <TD>{{ $carros->tipo_direcao }}</TD>
                        <TD>{{ $carros->alarme }}</TD>
                        <TD>{{ $carros->placa }}</TD>
                        <TD>{{ $carros->valor }}</TD>
                        <TD>{{ $carros->qntd_portas }}</TD>

                        <TD>
                            <form action="{{ route('carros.edit', $carros->id) }}">
                                <button type="submit">Editar</button>
                            </form>
                        </TD>
    
                        <TD>
                            <form action="{{ route('carros.destroy', $carros->id) }}" method="POST">
                                @csrf()
                                @method('DELETE')
                                <button type="submit">Excluir</button>
                            </form>
                        </TD>
                    </TR>
                </tbody>
            </table>
        </div> 

        <footer>
            <div> Criado por Ricardo Simões 2023 </div>
        </footer>
        
    </body>
</html>
