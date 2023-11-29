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
            <div class="cabecalho">
                <a href="{{ route('carros.welcome') }}" ><i>Início</i></a>
            </div>
        </header>

        <div>


            <table class="tabela_listagem">
                <thead>
                    <TR>
                        <TH colspan="15"><h2 class="titulo_listagem"><i>Lista de carros</i></h2></TH>
                        @include('message/message')
                    </TR>

                    <TR>
                        <TH>Marca</TH>
                        <TH>Modelo</TH>
                        <TH>Ano</TH>
                        <TH></TH>
                    </TR>
                </thead>

                <tbody>
                    @foreach($carros as $carro)
                    <TR>
                        <TD>{{ $carro->marca }}</TD>
                        <TD>{{ $carro->modelo }}</TD>
                        <TD>{{ $carro->ano }}</TD>
            
                         <TD>
                            <form action="{{ route('carros.show', $carro->id) }}">
                                <button type="submit">Visualizar</button>
                            </form>
                        </TD>
                    </TR>
                    @endforeach

                </tbody>
            </table>

            {{-- {{ $carros->links() }} --}}
        </div> 

        <footer>
            <div> Criado por Ricardo Simões 2023 </div>
        </footer>
        
    </body>
</html>
