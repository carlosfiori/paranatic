@extends('app')

@section('titulopagina')
	Ontem
@endsection



@section('titulomenor')
	<h1>Artefatos	<small><?=$nomeColaborador?></small>	</h1>
@endsection


@section('content')


<div class="col-md-12">
	<div class="row">



		<?php foreach ($artefatos as $artefato): ?>

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



@endsection



 