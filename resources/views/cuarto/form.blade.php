<!--<div class="form-group {{ $errors->has('idCuarto') ? 'has-error' : ''}}">
    <label for="idCuarto" class="col-md-4 control-label">{{ 'Idcuarto' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="idCuarto" type="text" id="idCuarto" value="{{ $cuarto->idCuarto or ''}}" >
        {!! $errors->first('idCuarto', '<p class="help-block">:message</p>') !!}
    </div>
</div>-->
<div class="form-group {{ $errors->has('nombre') ? 'has-error' : ''}}">
    <label for="nombre" class="col-md-4 control-label">{{ 'Nombre' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="nombre" type="text" id="nombre" value="{{ $cuarto->nombre or ''}}" >
        {!! $errors->first('nombre', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('ubicacion') ? 'has-error' : ''}}">
    <label for="ubicacion" class="col-md-4 control-label">{{ 'Ubicacion' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="ubicacion" type="text" id="ubicacion" value="{{ $cuarto->ubicacion or ''}}" >
        {!! $errors->first('ubicacion', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('idPiso') ? 'has-error' : ''}}">
    <label for="idPiso" class="col-md-4 control-label">{{ 'Piso' }}</label>
    <div class="col-md-6">
        {!!Form::select('idPiso',App\Piso::all()->
        pluck('nombre','idPiso'),null,['class'=>'form-control'])!!}
        {!!$errors->first('idPiso', '<p class="help-block">:message</p>') !!}

    </div>
    </div><div class="form-group {{ $errors->has('idArea') ? 'has-error' : ''}}">
    <label for="idArea" class="col-md-4 control-label">{{ 'Area' }}</label>
    <div class="col-md-6">
        {!!Form::select('idArea',App\Area::all()->
        pluck('nombre','idArea'),null,['class'=>'form-control'])!!}
        {!!$errors->first('idArea', '<p class="help-block">:message</p>') !!}

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
