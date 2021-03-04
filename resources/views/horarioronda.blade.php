
@extends('adminlte::layouts.app')
@section('main-content')

		<a href="formRonda" class="btn btn-success btn-sm" title="Add New Area">
                            <i class="fa fa-plus" aria-hidden="true"></i> Agregar Horario
                             </a>
		<div class="box box-solid box-success">
			<table id="tablas" 
			class="table table-striped table-bordered" cellspacing="0"  width="100%" border="22px">
			<thead>
			<center><h1 font-family="Century Gothic">Agenda de Rondas</h1></center>  
				</div>
					<tr>
					<th bgcolor="#99CCFF">Fecha</th>
					<th bgcolor="#99CCFF">Servicio</th> 
					 <th bgcolor="#99CCFF">Empleado</th>
					 <th bgcolor="#99CCFF">Hora Inicio</th>
					 <th bgcolor="#99CCFF">Hora Final</th>
					 <th bgcolor="#99CCFF">Observacion Inicial</th>
					 <th bgcolor="#99CCFF">Observacion Final</th>
					
					</tr>
				</thead>
				<tbody>
					<td>
				     	
				     </td>
					@foreach($servicios as $oservicio)
				<tr>
				 
				     		@foreach($oservicio->empleados as $oempleado)
				     		<tr>
				     			<td>{{$oempleado->pivot->fecha}} </td>
				     			<td>{{$oservicio->nombre}}</td>
				    
				     			<td>
				     				{{$oempleado->nombre}}
				     			</td>
				     			
				     			<td>
				     				{{$oempleado->pivot->horaInicio}}
				     			</td>
				     			<td>
				     				{{$oempleado->pivot->horaFin}}
				     			</td>
				     				<td>
				     				{{$oempleado->pivot->observacionInicial}}
				     			</td>
				     				<td>
				     				{{$oempleado->pivot->observacionFinal}}
				     			</td>
				     				

				     		</tr>
				     		@endforeach
				    
		
				 </tr>
				 @endforeach
				 </tbody>
					</table>

				
			
@endsection
