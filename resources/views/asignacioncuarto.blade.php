
@extends('adminlte::layouts.app')
@section('main-content')

	<a href="formCuarto" class="btn btn-success btn-sm" title="Add New Area">
                            <i class="fa fa-plus" aria-hidden="true"></i> Asignar Cuarto
                             </a>

		<div class="box box-solid box-success">
			<table id="tablas" 
			class="table table-striped table-bordered" cellspacing="0"  width="100%" border="22px">
			<thead>
			<center><h1 font-family="Century Gothic">Asignación Cuarto</h1></center>  
				</div>
					<tr>
					<th bgcolor="#99CCFF">Fecha Entrada</th>
					<th bgcolor="#99CCFF">Hora Entrada</th>
					<th bgcolor="#99CCFF">Paciente</th>
					<th bgcolor="#99CCFF">Pabellon</th>
					<th bgcolor="#99CCFF">Hora de Salida</th>
					<th bgcolor="#99CCFF">Fecha salida</th>
					</tr>
				</thead>
				<tbody>
					<td>
				     	 
				     </td>
					@foreach(app\Paciente::all() as $opaciente)
				<tr>
				 
				     		@foreach($opaciente->pabellones as $opabellon)
				     		<tr>
				     			<td>{{$opabellon->pivot->fechaEntrada}} </td>
				     			<td>{{$opabellon->pivot->horaEntrada}} </td>
				     			<td>{{$opaciente->nombre}}</td>
				    
				     			<td>
				     				{{$opabellon->nombre}}
				     			</td>
				     			
				     			<td>
				     				{{$opabellon->pivot->horaSalida}}
				     			</td>
				     			<td>
				     				{{$opabellon->pivot->fechaSalida}}
				     			</td>
				     			
				     		</tr>
				     		@endforeach
				    
		
				 </tr>
				 @endforeach
				 </tbody>
					</table>

				
			
@endsection

