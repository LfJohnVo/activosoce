<!-- Idtipoequipo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idTipoEquipo', 'Idtipoequipo:') !!}
    {!! Form::number('idTipoEquipo', null, ['class' => 'form-control']) !!}
</div>

<!-- Idempleado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idEmpleado', 'Idempleado:') !!}
    {!! Form::number('idEmpleado', null, ['class' => 'form-control']) !!}
</div>

<!-- Idmarca Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idMarca', 'Idmarca:') !!}
    {!! Form::number('idMarca', null, ['class' => 'form-control']) !!}
</div>

<!-- Idmodelo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idModelo', 'Idmodelo:') !!}
    {!! Form::number('idModelo', null, ['class' => 'form-control']) !!}
</div>

<!-- Idram Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idRam', 'Idram:') !!}
    {!! Form::number('idRam', null, ['class' => 'form-control']) !!}
</div>

<!-- Iddiscoduro Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idDiscoDuro', 'Iddiscoduro:') !!}
    {!! Form::number('idDiscoDuro', null, ['class' => 'form-control']) !!}
</div>

<!-- Foto Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('foto', 'Foto:') !!}
    {!! Form::textarea('foto', null, ['class' => 'form-control']) !!}
</div>

<!-- Numeroserie Field -->
<div class="form-group col-sm-6">
    {!! Form::label('numeroSerie', 'Numeroserie:') !!}
    {!! Form::text('numeroSerie', null, ['class' => 'form-control','maxlength' => 45,'maxlength' => 45]) !!}
</div>

<!-- Preciocompra Field -->
<div class="form-group col-sm-6">
    {!! Form::label('precioCompra', 'Preciocompra:') !!}
    {!! Form::number('precioCompra', null, ['class' => 'form-control']) !!}
</div>

<!-- Estatus Field -->
<div class="form-group col-sm-6">
    {!! Form::label('estatus', 'Estatus:') !!}
    {!! Form::text('estatus', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('equipos.index') }}" class="btn btn-light">Cancel</a>
</div>
