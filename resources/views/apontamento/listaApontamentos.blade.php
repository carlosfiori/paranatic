@extends('app')

@section('titulopagina')
	Ontem
@endsection



@section('titulomenor')
	<h1>Apontamentos	<small>Ontem</small>	</h1>
@endsection


@section('content')


<div class="col-md-12">
	<div class="row">
		<div class="box">
			<div class="box-body">
				<table id="tabelaApontamento" class="table table-striped table-bordered table-hover">
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
							<td><?=$dados['ResourceName']?></td>
							<td><?=$dados['dataApontamento']?></td>
							<td><?=$dados['horasApontadas']?></td>
							<td><i onclick="enviaEmailManual('<?=$dados['ResourceName']?>', '<?=$dados['resourceEmailAddress']?>')" class="glyphicon glyphicon-envelope"></i></td>

						</tr>
					<?php endforeach ?>
					</tbody>
				</table>

			</div>
		</div>
	</div>
</div>


<div class="modal fade" id="modalEnviaEmail" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>



<script type="text/javascript">


	$('#tabelaApontamento').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
	
	function enviaEmailManual(nome, email){
		var bomdia = "Bom dia "+nome+".";
		var corpo = "\n\nEstive analisando aqui e percebi que não houve apontamento de horas ontem. Teve algum problema? \n \n \nObrigado!";
		var assunto = "Apontamento de horas - Não houve apontamento ontem";
		var mailToLink = "mailto:"+email+"?subject="+assunto+"&body=" +encodeURIComponent(bomdia+corpo);
		window.location.href = mailToLink;
	}
</script>




@endsection



 