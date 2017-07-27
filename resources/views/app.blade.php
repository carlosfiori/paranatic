<!DOCTYPE html>
<html style="background-color: #008d43">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>@yield('titulopagina')</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="stylesheet" href="{{ asset('css/bootstrap/dist/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/AdminLTE.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/skins/_all-skins.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/dataTables.bootstrap.min.css') }}">
        {{--<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">--}}

        <script src="{{ asset('/js/jquery-3.2.1.min.js') }}"></script>
        <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('/js/funcoes.js') }}"></script>
        <script src="{{ asset('/js/jquery-ui.min.js') }}"></script>
        <script src="{{ asset('/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('/js/dataTables.bootstrap.min.js') }}"></script>

        <script src="{{ asset('/js/adminlte.min.js') }}"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.min.js"></script>

        {{--<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">--}}
        <link href="https://fonts.googleapis.com/css?family=Artifika|Roboto+Condensed" rel="stylesheet">
        <style>
            * {
                /*font-family: 'Roboto', sans-serif;*/
                font-family: 'Roboto Condensed', sans-serif;
            }

            .skin-blue .main-header .logo:hover {
                background-color: #008d43 !important;
            }

            .skin-blue .main-header .logo {
                background-color: #008d43 !important;

            }

            .skin-blue .main-header .navbar {
                background-color: #00a65a;
            }

            .skin-blue .main-header .navbar .sidebar-toggle:hover {
                background-color: #00a65a;
            }

            .skin-blue .wrapper, .skin-blue .main-sidebar, .skin-blue .left-side {
                /*background-color: #008d43;*/
            }

            .content {
                padding: 0;

            }
        </style>
    </head>

    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">

            <header class="main-header">

                <a href="{{ url('/system/') }}" class="logo">
                    <span class="logo-lg"><b>Economia</b>PARANÁ</span>
                </a>

                <nav class="navbar navbar-static-top">
                    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>
                </nav>
            </header>

            <aside class="main-sidebar">

                <section class="sidebar">

                    <ul class="sidebar-menu">
                        <li class="treeview">
                            <a href="/">
                                <i class="fa fa-dashboard"></i> <span>Principal</span>
                            </a>
                        </li>
                    </ul>
                    <ul class="sidebar-menu">
                        <li class="treeview">
                            <a href="{{url('/system/parceiros')}}">
                                <i class="fa fa-handshake-o"></i> <span>Parceiros</span>
                            </a>
                        </li>
                    </ul>

                    <ul class="sidebar-menu">
                        <li class="treeview">
                            <a href="{{url('/system/extrato')}}">
                                <i class="fa fa-history"></i> <span>Extrato</span>
                            </a>
                        </li>
                    </ul>

                    <ul class="sidebar-menu">
                        <li class="treeview">
                            <a href="{{url('/system/economias')}}">
                                <i class="fa fa-money"></i> <span>Economias</span>
                            </a>
                        </li>
                    </ul>
                </section>

            </aside>

            <div class="content-wrapper" style="background: #008d43;">

                <section class="content-header" style="padding-top: 0">
                    @yield('titulomenor')
                </section>
                @yield('valortotal')

                <section class="content">
                    @yield('content')
                </section>

            </div>

        </div>

        @yield('fim-pagina')
    </body>

</html>
