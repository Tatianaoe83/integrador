<!--<div class="form-group {{ $errors->has('idEmpleado') ? 'has-error' : ''}}">
    <label for="idEmpleado" class="col-md-4 control-label">{{ 'Idempleado' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="idEmpleado" type="text" id="idEmpleado" value="{{ $empleado->idEmpleado or ''}}" >
        {!! $errors->first('idEmpleado', '<p class="help-block">:message</p>') !!}
    </div>
</div>-->
<div class="form-group {{ $errors->has('nombre') ? 'has-error' : ''}}">
    <label for="nombre" class="col-md-4 control-label">{{ 'Nombre' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="nombre" type="text" id="nombre" value="{{ $empleado->nombre or ''}}" >
        {!! $errors->first('nombre', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('apellidoMaterno') ? 'has-error' : ''}}">
    <label for="apellidoMaterno" class="col-md-4 control-label">{{ 'Apellido Paterno' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="apellidoMaterno" type="text" id="apellidoMaterno" value="{{ $empleado->apellidoMaterno or ''}}" >
        {!! $errors->first('apellidoMaterno', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('apellidoPaterno') ? 'has-error' : ''}}">
    <label for="apellidoPaterno" class="col-md-4 control-label">{{ 'Apellido Materno' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="apellidoPaterno" type="text" id="apellidoPaterno" value="{{ $empleado->apellidoPaterno or ''}}" >
        {!! $errors->first('apellidoPaterno', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('direccion') ? 'has-error' : ''}}">
    <label for="direccion" class="col-md-4 control-label">{{ 'Direccion' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="direccion" type="text" id="direccion" value="{{ $empleado->direccion or ''}}" >
        {!! $errors->first('direccion', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('telefono') ? 'has-error' : ''}}">
    <label for="telefono" class="col-md-4 control-label">{{ 'Telefono' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="telefono" type="text" id="telefono" value="{{ $empleado->telefono or ''}}" >
        {!! $errors->first('telefono', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('sexo') ? 'has-error' : ''}}">
    <label for="sexo" class="col-md-4 control-label">{{ 'Sexo' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="sexo" type="text" id="sexo" value="{{ $empleado->sexo or ''}}" >
        {!! $errors->first('sexo', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
