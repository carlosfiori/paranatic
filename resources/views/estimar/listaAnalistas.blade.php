@extends('app')

@section('titulopagina')
	Ontem
@endsection



@section('titulomenor')
	<h1>Colaboradores</h1>
@endsection


@section('content')


<div class="col-md-12">
	<div class="row">



		<?php foreach ($listaAnalistas as $analista): ?>

		<div  class="col-md-4">
				<div class="box box-widget widget-user">
					<div class="widget-user-header bg-aqua-active">
						<h3 class="widget-user-username"><a href="{{ url('/visualizarAnalista/'.$analista->ResourceUID) }}"><?=$analista->ResourceName;?></a></h3>
					</div>
					<div class="widget-user-image">
						<img class="img-circle" src="http://photos.hdlandscapewallpaper.com/cartoon/0/01892.png" alt="User Avatar">
					</div>

              
				</div>
			</div>

        <?php endforeach ?>
	</div>
</div>



@endsection



 