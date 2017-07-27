@extends('app')

@section('titulopagina')
    Relatórios
@endsection


@section('content')

    <style>
        .titulo {
            background-color: #C8E6C9;
            font-size: 1.6em;
            padding-bottom: 5px;
            padding-top: 3px;
        }

        .nav-pills > li.active > a, .nav-pills > li.active > a:focus, .nav-pills > li.active > a:hover {
            background-color: #00a65a;
        }

        .nav-pills > li.active > a, .nav-pills > li.active > a:hover, .nav-pills > li.active > a:focus {
            border-top-color: #00a65a;
        }
    </style>

    <ul class="nav nav-pills" style="display: flex; justify-content: space-between;background-color: #c8e6c9">
        <li style="font-size: 1.5em" class="active"><a data-toggle="pill" href="#menu2017">2017</a></li>
        <li style="font-size: 1.5em"><a data-toggle="pill" href="#menu2016">2016</a></li>
    </ul>

    <div class="tab-content">
        <div id="menu2017" class="tab-pane fade in active">
            <div class="titulo">
                <span>Total economizado em 2017: <b>R$ 105,00</b></span>
            </div>
            <div style="overflow-y: scroll; text-align: center;">
                <img src="/images/relatorio-geral.PNG" alt="Relatorio">
            </div>
        </div>
        <div id="menu2016" class="tab-pane fade">
            <div class="titulo">
                <span>Total economizado em 2016: <b>R$ 105,00</b></span>
            </div>
            <div style="overflow-y: scroll; text-align: center;">
                <img src="/images/relatorio-geral.PNG" alt="Relatorio">
            </div>
        </div>

    </div>





@endsection


