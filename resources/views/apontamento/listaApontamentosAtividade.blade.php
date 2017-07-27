@extends('app')

@section('titulopagina')
	Inicial
@endsection



@section('titulomenor')
	<h1>Apontamentos	<small>Ontem</small>	</h1>
@endsection


@section('content')


<div class="col-md-12">
	<div class="row">
			
		<div class="box">
	
		<!-- /.box-header -->
		<div class="box-body no-padding">
			<table class="table table-striped">
				<thead>
					<tr>
						<th >Colaborador</th>
						<th>Dia</th>
						<th >Horas Apontadas</th>
						<th >Enviar e-mail</th>
					</tr>
				</thead>
				<tbody>

				<?php foreach ($apontamentos as $row): ?>

					<?php 
						$dados = (array)$row;
					 ?>
					<tr>
						<td><?=$dados['colaboradorUID']?></td>
						<td><?=$dados['dataApontamento']?></td>
						<td><?=$dados['horasApontadas']?></td>
						<td>enviar</td>

					</tr>
				<?php endforeach ?>
				</tbody>
			</table>

		</div>
		<!-- /.box-body -->
		</div>


	</div>
</div>


@endsection



 