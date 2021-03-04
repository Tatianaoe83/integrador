@extends('adminlte::layouts.app')
@section('main-content') 


		<a href="graficaPaquete" class="btn btn-success btn-sm" title="Add New Area">
                            <i class="fa fa-plus" aria-hidden="true"></i> Grafica De Paquetes Registrados
                             </a>
		
		<a href="listaSuscripciones" class="btn btn-primary btn-sm" title="Add New Area">
                            <i class="fa fa-file-pdf-o" aria-hidden="true"></i> Descargar
                             </a>


		<form method="GET" action="{{ url('/Suscripcion') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('Search') }}">
                                <span class="input-group-append">
                                    <button class="btn btn-secondary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>


          <div class="box box-solid box-success">
			<table id="tablas" 
			class="table table-striped table-bordered" cellspacing="0"  width="100%" border="22px">
			<thead>
			<center><h1 font-family="Century Gothic">Suscripcion</h1></center>  
				</div>

		

					<tr>
					<th bgcolor="#99CCFF">Nombre Usuario</th>
					<th bgcolor="#99CCFF">Paquete Actual</th> 
					 <th bgcolor="#99CCFF">Fecha de Inscripcion</th>
					 <th bgcolor="#99CCFF">Fecha Final</th>
					 <th bgcolor="#99CCFF">Historial</th>
					 
					</tr>
				</thead>
				<tbody> 
					<td>
				     	
				     </td>
					@foreach($Paquetes as $opaquete)
				<tr>
				 
				     		@foreach($opaquete->Hospitales as $ohospital)
				     		<tr>
				     			<td>{{$ohospital->nombre}} </td>
				     			<td>{{$opaquete->nombre}}</td>
				   
				     			
				     			<td>
				     				{{$ohospital->pivot->fecha_inscripcion}}
				     			</td>
				     			<td>
				     				{{$ohospital->pivot->fecha_fin}}
				     			</td>
				     			<td> <a href="" class="btn btn-primary btn-sm" title="Add New Inscripcion">
                            <i class="fa fa-plus" aria-hidden="true"></i> Ver
                        </a></td>
				     			
				     				

				     		</tr>
				     		@endforeach
				    
		
				 </tr>
				 @endforeach
			</tbody>
		</table>
	
				
			
@endsection
