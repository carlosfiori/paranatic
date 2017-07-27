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
	                  <td><span class="badge bg-green">20</span></td>
	                </tr>
	                <tr>
	                  <td>Junho</td>
	                  <td><span class="badge bg-red">-20</span></td>
	                </tr>
	                <tr>
	                  <td>Julho</td>
	                  <td><span class="badge bg-green">200</span></td>
	                </tr>
	                <tr>
	                  <td>Agosto</td>
	                  <td><span class="badge bg-green">100</span></td>
	                </tr>

               
              </tbody>
              </table>

				</div>
			</div>
	</div>



@endsection


@section('valortotal')
	<footer class="main-footer" style="text-align: center; padding: 0px;">
		  <b>R$D</b> <i style="font-size: 40px">300</i>
	</footer>
@endsection

