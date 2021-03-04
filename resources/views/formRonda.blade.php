@extends('adminlte::layouts.app')

@section('main-content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Nuevo Horario</div>
                    <div class="card-body">
                       <a href="{{ url('/horarioronda') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i>Regresar</button></a>
                        <br />
                        <br />

<div class="form-group {{ $errors->has('fecha') ? 'has-error' : ''}}">
    <label for="fecha" class="col-md-4 control-label">{{ 'Fecha' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="fecha" type="text" id="fecha" value="{{ $ronda->fecha or ''}}" >
        {!! $errors->first('fecha', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('servicio') ? 'has-error' : ''}}">
    <label for="servicio" class="col-md-4 control-label">{{ 'Servicio' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="servicio" type="text" id="servicio" value="{{ $ronda->servicio or ''}}" >
        {!! $errors->first('servicio', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('empleado') ? 'has-error' : ''}}">
    <label for="empleado" class="col-md-4 control-label">{{ 'Empleado' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="empleado" type="text" id="empleado" value="{{ $ronda->empleado or ''}}" >
        {!! $errors->first('empleado', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('horaInicio') ? 'has-error' : ''}}">
    <label for="horaInicio" class="col-md-4 control-label">{{ 'Hora inicio' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="horaInicio" type="text" id="horaInicio" value="{{ $ronda->horaInicio or ''}}" >
        {!! $errors->first('horaInicio', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('horaFin') ? 'has-error' : ''}}">
    <label for="horaFin" class="col-md-4 control-label">{{ 'Hora final' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="horaFin" type="text" id="horaFin" value="{{ $ronda->horaFin or ''}}" >
        {!! $errors->first('horaFin', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('observacionInicial') ? 'has-error' : ''}}">
    <label for="observacionInicial" class="col-md-4 control-label">{{ 'Observacion inicial' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="observacionInicial" type="text" id="observacionInicial" value="{{ $ronda->observacionInicial or ''}}" >
        {!! $errors->first('observacionInicial', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('observacionFinal') ? 'has-error' : ''}}">
    <label for="observacionFinal" class="col-md-4 control-label">{{ 'Observacion final' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="observacionFinal" type="text" id="observacionFinal" value="{{ $ronda->observacionFinal or ''}}" >
        {!! $errors->first('observacionFinal', '<p class="help-block">:message</p>') !!}
    </div>
    
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
@endsection
