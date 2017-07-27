@extends('app')

@section('titulopagina')
	Inicial
@endsection



@section('titulomenor')
	<!-- <h1>Dashboard 	<small>Control panel</small>	</h1> -->
@endsection


@section('content')
	
	<div class="row">
			<div class="col-md-12">
				<div class="box box-primary">
					<table class="table">
                <tbody>
	                <tr>
	                  <th>Mes</th>
	                  <th style="width: 40px">Pontos</th>
	                </tr>
	                
	                <tr>
	                  <td>Maio</td>
	                  <td><span class="badge bg-red">20</span></td>
	                </tr>
	                <tr>
	                  <td>Junho</td>
	                  <td><span class="badge bg-red">20</span></td>
	                </tr>
	                <tr>
	                  <td>Julho</td>
	                  <td><span class="badge bg-red">20</span></td>
	                </tr>
	                <tr>
	                  <td>Agosto</td>
	                  <td><span class="badge bg-red">20</span></td>
	                </tr>

               
              </tbody>
              </table>

				</div>
			</div>
	</div>



@endsection


@section('valortotal')
	<footer class="main-footer">
		<div class="pull-right hidden-xs">
		  <b>R$D</b> 240
		</div>
	</footer>
@endsection

