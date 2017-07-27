<!DOCTYPE html>
<html>
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
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

		


		<script src="{{ asset('/js/jquery-3.2.1.min.js') }}"></script>
		<script src="{{ asset('/js/bootstrap.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('/js/funcoes.js') }}"></script>
		<script src="{{ asset('/js/jquery-ui.min.js') }}"></script>
		<script src="{{ asset('/js/jquery.dataTables.min.js') }}"></script>
		<script src="{{ asset('/js/dataTables.bootstrap.min.js') }}"></script>

		<script src="{{ asset('/js/adminlte.min.js') }}"></script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.min.js"></script>


		
	</head>

	<body class="hold-transition skin-blue sidebar-mini">
		<div class="wrapper">

		  <header class="main-header">
		    
		    <a href="{{ url('/') }}" class="logo">
		      <span class="logo-lg"><b>Admin</b>LTE</span>
		    </a>
		    
		    <nav class="navbar navbar-static-top">
		      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
		        <span class="sr-only">Toggle navigation</span>
		      </a>
		    </nav>
		  </header>
		  
		  <aside class="main-sidebar">
		    
		    <section class="sidebar">

		      
		      <ul class="sidebar-menu" data-widget="tree">
				<li class="treeview">
					<a href="#">
						<i class="fa fa-dashboard"></i> <span>Principal</span>
					</a>
				</li>
		      </ul>
		       <ul class="sidebar-menu" data-widget="tree">
				<li class="treeview">
					<a href="{{url('/empresas')}}">
						<i class="fa fa-dashboard"></i> <span>Empresas</span>
					</a>
				</li>
		      </ul>
		    </section>
		    
		  </aside>

		  
		  <div class="content-wrapper">
		    
		    <section class="content-header">
		      @yield('titulomenor')
		    </section>

		    
		    <section class="content">
		      <div class="row">
		        <section class="col-md-12">
					@yield('content')
		        </section>
		      </div>
		    </section>
		    
		  </div>


		  	@yield('valortotal')


		</div>


		
	</body>

</html>
