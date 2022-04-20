<!-- Id Tipoequipo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_tipoEquipo', 'Tipo equipo:') !!}
    <select class="form-control" id="id_tipoEquipo" name="id_tipoEquipo">
        <option value="">Seleccione un tipo de equipo</option>
        @foreach ($tipoequipos as $tipoequipo)
            <option value="{{ $tipoequipo->id }}">{{ $tipoequipo->tipoEquipo }}</option>
        @endforeach
    </select>
</div>


<!-- Marca Field -->
<div class="form-group col-sm-6">
    {!! Form::label('marca', 'Marca:') !!}
    {!! Form::text('marca', null, ['class' => 'form-control','maxlength' => 100,'maxlength' => 100]) !!}
</div>

<!-- Fabricante Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fabricante', 'Fabricante:') !!}
    {!! Form::text('fabricante', null, ['class' => 'form-control','maxlength' => 100,'maxlength' => 100]) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Enviar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('marcaEquipos.index') }}" class="btn btn-light">Cancelar</a>
</div>
