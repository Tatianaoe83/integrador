<!--<div class="form-group {{ $errors->has('idPiso') ? 'has-error' : ''}}">
    <label for="idPiso" class="col-md-4 control-label">{{ 'Idpiso' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="idPiso" type="text" id="idPiso" value="{{ $piso->idPiso or ''}}" >
        {!! $errors->first('idPiso', '<p class="help-block">:message</p>') !!}
    </div>
</div>-->
<div class="form-group {{ $errors->has('nombre') ? 'has-error' : ''}}">
    <label for="nombre" class="col-md-4 control-label">{{ 'Nombre' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="nombre" type="text" id="nombre" value="{{ $piso->nombre or ''}}" >
        {!! $errors->first('nombre', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('idHospital') ? 'has-error' : ''}}">
    <label for="idHospital" class="col-md-4 control-label">{{ 'Hospital' }}</label>
    <div class="col-md-6">
       
        {!!Form::select('idHospital',App\hospital::all()->
        pluck('nombre','idHospital'),null,['class'=>'form-control'])!!}
        {!!$errors->first('idHospital', '<p class="help-block">:message</p>') !!}

    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
