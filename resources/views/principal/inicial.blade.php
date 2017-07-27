@extends('app')

@section('titulopagina')
    Inicial
@endsection



@section('titulomenor')
    <!-- <h1>Dashboard 	<small>Control panel</small>	</h1> -->
@endsection


@section('valortotal')
    <footer class="main-footer" style="text-align: center; padding: 0;background-color: #C8E6C9">
        <div>
            <span style="font-size: 1.6em;">SALDO</span>
            <br>
            <span style="font-size: 2.5em;font-weight: bold">
        <b>R$</b> 300
        </span>
        </div>
        <hr style="margin: 0 0 5px;">
        <div class="flex-saldo">
            <div>
                <a href="/extrato">
                    <i class="fa fa-history" aria-hidden="true"></i>
                    EXTRATO</a>
            </div>
            <div>
                <a href="/economias"><i class="fa fa-money" aria-hidden="true"></i> ECONOMIAS</a>
            </div>
        </div>
    </footer>
@endsection

@section('content')
    <style>
        .flex-saldo {
            display: flex;
            justify-content: space-around;
        }

        .flex-saldo div {
            width: 50%;
            font-size: 1.5em;
        }

        .flex-saldo a {
            color: #999;
        }

        .alert-parana {
            background-color: #C8E6C9
        }

        .novo-btn {
            width: 100%;
            text-align: center;
            font-size: 3em;
            position: absolute;
            bottom: 3%;
        }
    </style>

    <div class="row" style="margin-top: 30px">
        <div class="col-xs-12">

            <div class="alert alert-parana">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>Novo Parceiro</strong> Temos um novo parceiro, Burger King.
            </div>

            <div class="alert alert-parana">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>Pico!</strong> Horario de pico começa as 20 Horas.
            </div>

            <div class="alert alert-parana">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>Atenção</strong> Você tem pontos para trocar.
            </div>
        </div>
    </div>

@endsection

@section('fim-pagina')
    <div class="novo-btn">
        <a style="" href="/novo">

            <span class="fa-stack ">
                  <i class="fa fa-circle fa-stack-2x" style="color: #00a65a;"></i>
                  <i class="fa fa-bolt fa-stack-1x fa-inverse" style="color: #FFEB3B;"></i>
            </span>
        </a>

    </div>
@endsection

