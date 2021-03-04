<div class="form-group {{ $errors->has('fecha') ? 'has-error' : ''}}">
    <label for="fecha" class="col-md-4 control-label">{{ 'Fecha' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="fecha" type="text" id="fecha" value="{{ $asignacionronda->fecha or ''}}" >
        {!! $errors->first('fecha', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('servicio') ? 'has-error' : ''}}">
    <label for="servicio" class="col-md-4 control-label">{{ 'Servicio' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="servicio" type="text" id="servicio" value="{{ $asignacionronda->servicio or ''}}" >
        {!! $errors->first('servicio', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('empleado') ? 'has-error' : ''}}">
    <label for="empleado" class="col-md-4 control-label">{{ 'Empleado' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="empleado" type="text" id="empleado" value="{{ $asignacionronda->empleado or ''}}" >
        {!! $errors->first('empleado', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('horaInicio') ? 'has-error' : ''}}">
    <label for="horaInicio" class="col-md-4 control-label">{{ 'Horainicio' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="horaInicio" type="text" id="horaInicio" value="{{ $asignacionronda->horaInicio or ''}}" >
        {!! $errors->first('horaInicio', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('horaFin') ? 'has-error' : ''}}">
    <label for="horaFin" class="col-md-4 control-label">{{ 'Horafin' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="horaFin" type="text" id="horaFin" value="{{ $asignacionronda->horaFin or ''}}" >
        {!! $errors->first('horaFin', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('observacionInicial') ? 'has-error' : ''}}">
    <label for="observacionInicial" class="col-md-4 control-label">{{ 'Observacioninicial' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="observacionInicial" type="text" id="observacionInicial" value="{{ $asignacionronda->observacionInicial or ''}}" >
        {!! $errors->first('observacionInicial', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('observacionFinal') ? 'has-error' : ''}}">
    <label for="observacionFinal" class="col-md-4 control-label">{{ 'Observacionfinal' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="observacionFinal" type="text" id="observacionFinal" value="{{ $asignacionronda->observacionFinal or ''}}" >
        {!! $errors->first('observacionFinal', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
