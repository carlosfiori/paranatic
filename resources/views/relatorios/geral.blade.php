@extends('app')

@section('titulopagina')
    Relatórios
@endsection


@section('content')

    <style>
        .titulo {
            background-color: #C8E6C9;
            padding-bottom: 5px;
            padding-top: 3px;
            font-size: 1.6em;
        }
    </style>


    <div class="titulo">
        <span>Total economizado este ano: <b>R$ 105,00</b></span>
    </div>
    <div style="overflow-y: scroll; text-align: center; overflow-x: hidden">
        <img src="/images/relatorio-geral.PNG" alt="Relatorio">
    </div>

@endsection


