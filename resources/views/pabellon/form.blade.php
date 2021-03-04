<!--<div class="form-group {{ $errors->has('idPabellon') ? 'has-error' : ''}}">
    <label for="idPabellon" class="col-md-4 control-label">{{ 'Idpabellon' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="idPabellon" type="text" id="idPabellon" value="{{ $pabellon->idPabellon or ''}}" >
        {!! $errors->first('idPabellon', '<p class="help-block">:message</p>') !!}
    </div>
</div>-->
<div class="form-group {{ $errors->has('nombre') ? 'has-error' : ''}}">
    <label for="nombre" class="col-md-4 control-label">{{ 'Nombre' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="nombre" type="text" id="nombre" value="{{ $pabellon->nombre or ''}}" >
        {!! $errors->first('nombre', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('ubicacion') ? 'has-error' : ''}}">
    <label for="ubicacion" class="col-md-4 control-label">{{ 'Ubicacion' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="ubicacion" type="text" id="ubicacion" value="{{ $pabellon->ubicacion or ''}}" >
        {!! $errors->first('ubicacion', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('descripcion') ? 'has-error' : ''}}">
    <label for="descripcion" class="col-md-4 control-label">{{ 'Descripcion' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="descripcion" type="text" id="descripcion" value="{{ $pabellon->descripcion or ''}}" >
        {!! $errors->first('descripcion', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('idCuarto') ? 'has-error' : ''}}">
    <label for="idCuarto" class="col-md-4 control-label">{{ 'Cuarto' }}</label>
    <div class="col-md-6">
        {!!Form::select('idCuarto',App\cuarto::all()->
        pluck('ubicacion','idCuarto'),null,['class'=>'form-control'])!!}
        {!!$errors->first('idCuarto', '<p class="help-block">:message</p>') !!}

    </div>
</div>
<div class="form-group {{ $errors->has('idEstatus') ? 'has-error' : ''}}">
    <label for="idEstatus" class="col-md-4 control-label">{{ 'Estatus' }}</label>
    <div class="col-md-6">
        {!!Form::select('idEstatus',App\Estatus::all()->
        pluck('estatus','idEstatus'),null,['class'=>'form-control'])!!}
        {!!$errors->first('idEstatus', '<p class="help-block">:message</p>') !!}

    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
