<!--<div class="form-group {{ $errors->has('idPaciente') ? 'has-error' : ''}}">
    <label for="idPaciente" class="col-md-4 control-label">{{ 'Idpaciente' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="idPaciente" type="text" id="idPaciente" value="{{ $paciente->idPaciente or ''}}" >
        {!! $errors->first('idPaciente', '<p class="help-block">:message</p>') !!}
    </div>
</div>-->
<div class="form-group {{ $errors->has('nombre') ? 'has-error' : ''}}">
    <label for="nombre" class="col-md-4 control-label">{{ 'Nombre' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="nombre" type="text" id="nombre" value="{{ $paciente->nombre or ''}}" >
        {!! $errors->first('nombre', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('apellidos') ? 'has-error' : ''}}">
    <label for="apellidos" class="col-md-4 control-label">{{ 'Apellidos' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="apellidos" type="text" id="apellidos" value="{{ $paciente->apellidos or ''}}" >
        {!! $errors->first('apellidos', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('sexo') ? 'has-error' : ''}}">
    <label for="sexo" class="col-md-4 control-label">{{ 'Sexo' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="sexo" type="text" id="sexo" value="{{ $paciente->sexo or ''}}" >
        {!! $errors->first('sexo', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('fecha_nacimiento') ? 'has-error' : ''}}">
    <label for="fecha_nacimiento" class="col-md-4 control-label">{{ 'Fecha Nacimiento' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="fecha_nacimiento" type="text" id="fecha_nacimiento" value="{{ $paciente->fecha_nacimiento or ''}}" >
        {!! $errors->first('fecha_nacimiento', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('telefono') ? 'has-error' : ''}}">
    <label for="telefono" class="col-md-4 control-label">{{ 'Telefono' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="telefono" type="text" id="telefono" value="{{ $paciente->telefono or ''}}" >
        {!! $errors->first('telefono', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('direccion') ? 'has-error' : ''}}">
    <label for="direccion" class="col-md-4 control-label">{{ 'Direccion' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="direccion" type="text" id="direccion" value="{{ $paciente->direccion or ''}}" >
        {!! $errors->first('direccion', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('enfermedad') ? 'has-error' : ''}}">
    <label for="enfermedad" class="col-md-4 control-label">{{ 'Enfermedad' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="enfermedad" type="text" id="enfermedad" value="{{ $paciente->enfermedad or ''}}" >
        {!! $errors->first('enfermedad', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
