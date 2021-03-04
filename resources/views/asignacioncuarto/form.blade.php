<div class="form-group {{ $errors->has('fechaEntrada') ? 'has-error' : ''}}">
    <label for="fechaEntrada" class="col-md-4 control-label">{{ 'Fechaentrada' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="fechaEntrada" type="text" id="fechaEntrada" value="{{ $asignacioncuarto->fechaEntrada or ''}}" >
        {!! $errors->first('fechaEntrada', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('horaEntrada') ? 'has-error' : ''}}">
    <label for="horaEntrada" class="col-md-4 control-label">{{ 'Horaentrada' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="horaEntrada" type="text" id="horaEntrada" value="{{ $asignacioncuarto->horaEntrada or ''}}" >
        {!! $errors->first('horaEntrada', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('paciente') ? 'has-error' : ''}}">
    <label for="paciente" class="col-md-4 control-label">{{ 'Paciente' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="paciente" type="text" id="paciente" value="{{ $asignacioncuarto->paciente or ''}}" >
        {!! $errors->first('paciente', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('pabellon') ? 'has-error' : ''}}">
    <label for="pabellon" class="col-md-4 control-label">{{ 'Pabellon' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="pabellon" type="text" id="pabellon" value="{{ $asignacioncuarto->pabellon or ''}}" >
        {!! $errors->first('pabellon', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('horaSalida') ? 'has-error' : ''}}">
    <label for="horaSalida" class="col-md-4 control-label">{{ 'Horasalida' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="horaSalida" type="text" id="horaSalida" value="{{ $asignacioncuarto->horaSalida or ''}}" >
        {!! $errors->first('horaSalida', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('fechaSalida') ? 'has-error' : ''}}">
    <label for="fechaSalida" class="col-md-4 control-label">{{ 'Fechasalida' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="fechaSalida" type="text" id="fechaSalida" value="{{ $asignacioncuarto->fechaSalida or ''}}" >
        {!! $errors->first('fechaSalida', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
