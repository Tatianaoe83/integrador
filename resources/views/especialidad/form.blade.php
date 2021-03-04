<!--<div class="form-group {{ $errors->has('idEspecialidad') ? 'has-error' : ''}}">
    <label for="idEspecialidad" class="col-md-4 control-label">{{ 'Idespecialidad' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="idEspecialidad" type="text" id="idEspecialidad" value="{{ $especialidad->idEspecialidad or ''}}" >
        {!! $errors->first('idEspecialidad', '<p class="help-block">:message</p>') !!}
    </div>
</div>-->
<div class="form-group {{ $errors->has('Especialidad') ? 'has-error' : ''}}">
    <label for="Especialidad" class="col-md-4 control-label">{{ 'Especialidad' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="Especialidad" type="text" id="Especialidad" value="{{ $especialidad->Especialidad or ''}}" >
        {!! $errors->first('Especialidad', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
