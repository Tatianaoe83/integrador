@extends('adminlte::layouts.app')

@section('main-content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Nueva Inscripcion</div>
                    <div class="card-body">
                       <a href="{{ url('/Inscripcion') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i>Regresar</button></a>
                        <br />
                        <br />

<div class="form-group {{ $errors->has('idPaquete') ? 'has-error' : ''}}">
    <label for="idPaquete" class="col-md-4 control-label">{{ 'Paquete' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="idPaquete" type="text" id="idPaquete" value="{{ $inscripcion->idPaquete or ''}}" >
        {!! $errors->first('idPaquete', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<!--<div class="form-group {{ $errors->has('idInscripcion') ? 'has-error' : ''}}">
    <label for="idInscripcion" class="col-md-4 control-label">{{ 'Inscripcion' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="idInscripcion" type="text" id="idInscripcion" value="{{ $inscripcion->idInscripcion or ''}}" >
        {!! $errors->first('idInscripcion', '<p class="help-block">:message</p>') !!}
    </div>
</div>-->
<div class="form-group {{ $errors->has('fecha_inscripcion') ? 'has-error' : ''}}">
    <label for="fecha_inscripcion" class="col-md-4 control-label">{{ 'Fecha Inscripcion' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="fecha_inscripcion" type="text" id="fecha_inscripcion" value="{{ $inscripcion->fecha_inscripcion or ''}}" >
        {!! $errors->first('fecha_inscripcion', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('fecha_fin') ? 'has-error' : ''}}">
    <label for="fecha_fin" class="col-md-4 control-label">{{ 'Fecha Fin' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="fecha_fin" type="text" id="fecha_fin" value="{{ $inscripcion->fecha_fin or ''}}" >
        {!! $errors->first('fecha_fin', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('idHospital') ? 'has-error' : ''}}">
    <label for="idHospital" class="col-md-4 control-label">{{ 'Hospital' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="idHospital" type="text" id="idHospital" value="{{ $inscripcion->idHospital or ''}}" >
        {!! $errors->first('idHospital', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>

@endsection
