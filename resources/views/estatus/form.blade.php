<!--<div class="form-group {{ $errors->has('idEstatus') ? 'has-error' : ''}}">
    <label for="idEstatus" class="col-md-4 control-label">{{ 'Idestatus' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="idEstatus" type="text" id="idEstatus" value="{{ $estatus->idEstatus or ''}}" >
        {!! $errors->first('idEstatus', '<p class="help-block">:message</p>') !!}
    </div>
</div>-->
<div class="form-group {{ $errors->has('estatus') ? 'has-error' : ''}}">
    <label for="estatus" class="col-md-4 control-label">{{ 'Estatus' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="estatus" type="text" id="estatus" value="{{ $estatus->estatus or ''}}" >
        {!! $errors->first('estatus', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
