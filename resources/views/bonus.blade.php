@extends('app')

@section('titulopagina')
    Bonus
@endsection


@section('content')

    <style>
        .titulo {
            background-color: #C8E6C9;
            font-size: 1.6em;
            padding: 3px 3px 5px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
    </style>


    <div class="row">
        <div class="col-xs-12">
            <div class="titulo">
                Sorteios e Bônus
                <a href="#" data-toggle="collapse" data-target="#demo" style="color: #00a65a">
                    <i class="fa fa-info-circle"></i>
                </a>
            </div>

            <div id="demo" class="collapse" style="background-color: #C8E6C9">
                Para você participar basta economizar!!
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12" style="background-color: #C8E6C9">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th style="width: 50%">Mês</th>
                        <th>Resultado</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Janeiro</td>
                        <td>Continue economizando...</td>
                    </tr>
                    <tr>
                        <td>Fevereiro</td>
                        <td>
                            Parabens!!
                            + <i class="fa fa-bolt" style="color: #FFEB3B"></i> 300
                        </td>
                    </tr>
                    <tr>
                        <td>Março</td>
                        <td>Em processo...</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>


@endsection


