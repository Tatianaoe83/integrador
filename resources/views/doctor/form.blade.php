<!--<div class="form-group {{ $errors->has('idDoctor') ? 'has-error' : ''}}">
    <label for="idDoctor" class="col-md-4 control-label">{{ 'Iddoctor' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="idDoctor" type="text" id="idDoctor" value="{{ $doctor->idDoctor or ''}}" >
        {!! $errors->first('idDoctor', '<p class="help-block">:message</p>') !!}
    </div>
</div>-->
<div class="form-group {{ $errors->has('nombre') ? 'has-error' : ''}}">
    <label for="nombre" class="col-md-4 control-label">{{ 'Nombre' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="nombre" type="text" id="nombre" value="{{ $doctor->nombre or ''}}" >
        {!! $errors->first('nombre', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('apellidos') ? 'has-error' : ''}}">
    <label for="apellidos" class="col-md-4 control-label">{{ 'Apellidos' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="apellidos" type="text" id="apellidos" value="{{ $doctor->apellidos or ''}}" >
        {!! $errors->first('apellidos', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('telefono') ? 'has-error' : ''}}">
    <label for="telefono" class="col-md-4 control-label">{{ 'Telefono' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="telefono" type="text" id="telefono" value="{{ $doctor->telefono or ''}}" >
        {!! $errors->first('telefono', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
    <label for="email" class="col-md-4 control-label">{{ 'Email' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="email" type="text" id="email" value="{{ $doctor->email or ''}}" >
        {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('idEspecialidad') ? 'has-error' : ''}}">
    <label for="idEspecialidad" class="col-md-4 control-label">{{ 'Especialidad' }}</label>
    <div class="col-md-6">
        {!!Form::select('idEspecialidad',App\Especialidad::all()->
        pluck('Especialidad','idEspecialidad'),null,['class'=>'form-control'])!!}
        {!!$errors->first('idEspecialidad', '<p class="help-block">:message</p>') !!}

    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
