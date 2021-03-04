@extends('adminlte::layouts.app')

@section('main-content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

   

                        <div class="table-responsive">

                            <body>
    <center><h1>Lista de Pacientes</h1></center>
    <table id="media">
         <thead>
            <tr>

            
                 <th>Nombre</th>
                 <th>Apellidos</th>
                 <th>Fecha Nacimiento</th>
                 <th>Telefono</th>
                 <th>Direccion</th>
                 <th>Enfermedad</th>
                  
            </tr>
        </thead>
        @foreach($paciente as $paciente)

        <tbody>

            
        <tr>
             <td>{{ $paciente->nombre }}</td>
             <td>{{ $paciente->apellidos }}</td>
             <td>{{ $paciente->fecha_nacimiento }}</td>
             <td>{{ $paciente->telefono }}</td>
            <td>{{ $paciente->direccion }}</td>
            <td>{{ $paciente->enfermedad }}</td>
        </tr>


        </tbody>
        @endforeach

  
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
