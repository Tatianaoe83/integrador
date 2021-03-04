<!--<div class="form-group {{ $errors->has('idPaquete') ? 'has-error' : ''}}">
    <label for="idPaquete" class="col-md-4 control-label">{{ 'Idpaquete' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="idPaquete" type="text" id="idPaquete" value="{{ $paquete->idPaquete or ''}}" >
        {!! $errors->first('idPaquete', '<p class="help-block">:message</p>') !!}
    </div>
</div>-->
<div class="form-group {{ $errors->has('nombre') ? 'has-error' : ''}}">
    <label for="nombre" class="col-md-4 control-label">{{ 'Nombre' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="nombre" type="text" id="nombre" value="{{ $paquete->nombre or ''}}" >
        {!! $errors->first('nombre', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('costo') ? 'has-error' : ''}}">
    <label for="costo" class="col-md-4 control-label">{{ 'Costo' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="costo" type="text" id="costo" value="{{ $paquete->costo or ''}}" >
        {!! $errors->first('costo', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('descripcion') ? 'has-error' : ''}}">
    <label for="descripcion" class="col-md-4 control-label">{{ 'Descripcion' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="descripcion" type="text" id="descripcion" value="{{ $paquete->descripcion or ''}}" >
        {!! $errors->first('descripcion', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('tiempo') ? 'has-error' : ''}}">
    <label for="tiempo" class="col-md-4 control-label">{{ 'Tiempo' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="tiempo" type="text" id="tiempo" value="{{ $paquete->tiempo or ''}}" >
        {!! $errors->first('tiempo', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
