<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control','maxlength' => 155,'maxlength' => 155]) !!}
</div>

<!-- Razonsocial Field -->
<div class="form-group col-sm-6">
    {!! Form::label('razonSocial', 'Razon social:') !!}
    {!! Form::text('razonSocial', null, ['class' => 'form-control','maxlength' => 155,'maxlength' => 155]) !!}
</div>

<!-- Rfc Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rfc', 'Rfc:') !!}
    {!! Form::text('rfc', null, ['class' => 'form-control','maxlength' => 14,'maxlength' => 14]) !!}
</div>

<!-- Direccion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('direccion', 'Dirección:') !!}
    {!! Form::text('direccion', null, ['class' => 'form-control','maxlength' => 2000,'maxlength' => 2000]) !!}
</div>

<!-- Estatus Field -->
<div class="form-group col-sm-6">
    {!! Form::label('estatus', 'Estatus:') !!}
    <select class="form-control" id="estatus" name="estatus">
        <option value="">Seleccione un estatus</option>
        <option value="1">Activo</option>
        <option value="0">Inactivo</option>
    </select>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Enviar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('arrendadoras.index') }}" class="btn btn-light">Cancelar</a>
</div>
