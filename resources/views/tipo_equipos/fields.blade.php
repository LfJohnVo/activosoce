<!-- Tipoequipo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipoEquipo', 'Tipo equipo:') !!}
    {!! Form::text('tipoEquipo', null, ['class' => 'form-control','maxlength' => 45,'maxlength' => 45]) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Enviar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('tipoEquipos.index') }}" class="btn btn-light">Cancelar</a>
</div>
