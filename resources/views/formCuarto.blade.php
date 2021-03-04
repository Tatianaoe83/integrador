@extends('adminlte::layouts.app')

@section('main-content')
<!DOCTYPE html>
<html>
<head>
    <title>Asignacion Cuarto</title>
</head>
<body>

    <a href="{{ url('/asignacioncuarto') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i>Regresar</button></a>
                        
 <form method="get" action="{{ url('/asignacioncuarto') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">

<div class="form-group {{ $errors->has('fechaEntrada') ? 'has-error' : ''}}">
    <label for="fechaEntrada" class="col-md-4 control-label">{{ 'Fecha entrada' }}</label>
    <div class="col-md-6">
      <input type="text" name="fechaEntrada">
    </div>
</div>

<div class="form-group {{ $errors->has('horaEntrada') ? 'has-error' : ''}}">
    <label for="horaEntrada" class="col-md-4 control-label">{{ 'Hora Entrada' }}</label>
    <div class="col-md-6">
        <input type="text" name="horaEntrada">
    </div>
</div>

<div class="form-group {{ $errors->has('idPaciente') ? 'has-error' : ''}}">
    <label for="idPaciente" class="col-md-4 control-label">{{ 'Paciente' }}</label>
    <div class="col-md-6">
       

          {!!Form::select('idPaciente', App\paciente::all()->pluck('nombre', 'idpaciente'),null,['class' => 'form-control','name'=>'pacien','placeholder'=>'Seleccione'])!!}
        {!!$errors->first('idPaciente', '<p class="help-block">:message</p>') !!}

    </div>
</div>

<div class="form-group {{ $errors->has('idPabellon') ? 'has-error' : ''}}">
    <label for="idPabellon" class="col-md-4 control-label">{{ 'Pabellon' }}</label>
    <div class="col-md-6">
        {!!Form::select('idPabellon',App\Pabellon::all()->
        pluck('nombre','idPabellon'),null,['class'=>'form-control'])!!}
        {!!$errors->first('idPabellon', '<p class="help-block">:message</p>') !!}

    </div>
</div>

<div class="form-group {{ $errors->has('horaSalida') ? 'has-error' : ''}}">
    <label for="horaSalida" class="col-md-4 control-label">{{ 'Hora salida' }}</label>
    <div class="col-md-6">
        <input type="text" name="horaSalida">
    </div>
</div><div class="form-group {{ $errors->has('fechaSalida') ? 'has-error' : ''}}">
    <label for="fechaSalida" class="col-md-4 control-label">{{ 'Fecha salida' }}</label>
    <div class="col-md-6">
       <input type="text" name="fechaSalida">
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <a href="{{ url('/asignacioncuarto') }}" title="Back"><button class="btn btn-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i>Create</button></a>
    </div>
</div>
</form>
</body>
</html>  
@endsection

