@extends('app')

@section('titulopagina')
    Extrato
@endsection


@section('content')

    <style>
        .badge {
            background-color: #008d43 !important;
        }

        .red {
            background-color: #dd4b39 !important
        }

        .panel-title {
            color: #008d43;
        }

        .neutro {
            background-color: #777 !important;
        }
    </style>


    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default panel-faq">
                <div class="panel-heading">
                    <a data-toggle="collapse" data-parent="#accordion-cat-1" href="#faq-cat-1-sub-1">
                        <h4 class="panel-title">
                            Janeiro/2017
                            <span class="pull-right badge">
                                250
                                <i class="fa fa-bolt" style="color: #FFEB3B;"></i>
                            </span>
                        </h4>
                    </a>
                </div>
                <div id="faq-cat-1-sub-1" class="panel-collapse collapse">
                    <div class="panel-body">
                        <div class="row form-group">
                            <div class="col-xs-12">Saldo anterior
                                <span class="pull-right badge neutro">
                                    300
                                    <i class="fa fa-bolt" style="color: #FFEB3B;"></i>
                                </span>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-xs-12">Burger King (03/01/17)
                                <span class="pull-right badge red">
                                    -80
                                    <i class="fa fa-bolt" style="color: #FFEB3B;"></i>
                                </span>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-xs-12">TCCC (10/01/17)
                                <span class="pull-right badge red">
                                    -20
                                    <i class="fa fa-bolt" style="color: #FFEB3B;"></i>
                                </span>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-xs-12">Bonus economia
                                <span class="pull-right badge">
                                    +50
                                    <i class="fa fa-bolt" style="color: #FFEB3B;"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="panel panel-default panel-faq">
                <div class="panel-heading">
                    <a data-toggle="collapse" data-parent="#accordion-cat-2" href="#faq-cat-2-sub-1">
                        <h4 class="panel-title">
                            Fevereiro/2017
                            <span class="pull-right badge">
                                100
                                <i class="fa fa-bolt" style="color: #FFEB3B;"></i>
                            </span>
                        </h4>
                    </a>
                </div>
                <div id="faq-cat-2-sub-1" class="panel-collapse collapse">
                    <div class="panel-body">
                        <div class="row form-group">
                            <div class="col-xs-12">Saldo anterior
                                <span class="pull-right badge neutro">
                                    250
                                    <i class="fa fa-bolt" style="color: #FFEB3B;"></i>
                                </span>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-xs-12">Burger King (11/02/17)
                                <span class="pull-right badge red">
                                    -80
                                    <i class="fa fa-bolt" style="color: #FFEB3B;"></i>
                                </span>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-xs-12">TCCC (22/02/17)
                                <span class="pull-right badge red">
                                    -20
                                    <i class="fa fa-bolt" style="color: #FFEB3B;"></i>
                                </span>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-xs-12">ParanaTic (37/02/17)
                                <span class="pull-right badge red">
                                    -50
                                    <i class="fa fa-bolt" style="color: #FFEB3B;"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

@endsection


