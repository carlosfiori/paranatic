@extends('app')

@section('titulopagina')
	Ontem
@endsection



@section('titulomenor')

@endsection


@section('content')


<div class="col-md-12">
	<div class="row">
		<div class="col-md-3">
			<div class="box box-primary">
				<div class="box-body box-profile">
					<img class="profile-user-img img-responsive img-circle" src="<?=$informacoesGerais->linkFoto?>" alt="User profile picture">
					<h3 class="profile-username text-center"><?=$informacoesGerais->resourceName?></h3>
					<ul class="list-group list-group-unbordered">

						<li class="list-group-item">
							<b>Atividades</b> <a class="pull-right"><?=$informacoesGerais->quantidadeAtividade?></a>
						</li>
						<li class="list-group-item">
							<b>Média Artefato</b> <a class="pull-right"><?=$informacoesGerais->mediaArtefato?></a>
						</li>
						<li class="list-group-item">
							<b>Produtividade</b> <a class="pull-right"><?=$informacoesGerais->produtividade?></a>
						</li>
					</ul>
				</div>
			</div>
		</div>

		<div class="col-md-9">
			<div class="nav-tabs-custom">
				<ul class="nav nav-tabs">
					<?php 
						$ativo = "active";
				 	?>


					<?php foreach ($historicoPorArtefato as $row): ?>
						<li class="<?=$ativo?>"><a href="<?="#".$row['codigoTab']?>" data-toggle="tab" aria-expanded=""><?=$row['nomeArtefato']?></a></li>
						<?php 
							$ativo = "";
					 	?>
					<?php endforeach ?>
				</ul>


				<div class="tab-content">
					<?php 
						$ativo = "active";
				 	?>

					<?php foreach ($historicoPorArtefato as $row): ?>
						<div class="tab-pane <?=$ativo?>" id="<?=$row['codigoTab']?>">
							<canvas id="<?=$row['codigo']?>" class="chartjs" width="770" height="385" style="display: block; width: 770px; height: 385px;"></canvas>
							<?php 
							$ativo = "";
					 	?>
						</div>

					<?php endforeach ?>
				</div>
			</div> 
		</div>
	</div>

	<div class="row">
		<?php foreach ($custoArtefatoColaborador as $artefato): ?>

			<div class="col-md-3 col-sm-6 col-xs-12">
	          <div class="info-box">
	            <span class="info-box-icon bg-aqua"><i class=" fa <?= $artefato['icone'] ?>"></i></span>
	            <div class="info-box-content">
	              <span class="info-box-text"><?= ucwords($artefato['descricao']); ?></span>
	              <span class="info-box-number"><?=$artefato['tempoGasto']?></span>
	            </div>
	          </div>
	        </div>
        <?php endforeach ?>
	</div>
</div>





<script type="text/javascript">

	// var ctx = document.getElementById("myChart");

	// var myChart = new Chart(ctx, {
	//     type: 'line',
	//     data: {
	//         labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange",],
	//         datasets: [{
	//             label: '# of Votes',
	//             data: [1, 2, 3, 5, 2, 3,],

	//         }]
	//     }
	// });


	function criarGrafico(nomeGrafico, varLabels, varDatas, charts){
		var nomeGrafico = document.getElementById(nomeGrafico);

		
		var charts = new Chart(nomeGrafico, {
		    type: 'line',
		    data: {
		        labels: varLabels,
		        datasets: [{
		            label: 'Tempo de desenvolvimento',
		            data: varDatas,

		        }]
		    }
		});
	}


</script>



<?php 	
	foreach ($historicoPorArtefato as $row) {
		echo "<script> criarGrafico('".$row['codigo']."'	,[".$row['labels']."],[".$row['datas']."], '".$row['codigo']."charts')</script>";
	}
 ?>



@endsection



 