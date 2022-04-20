<!-- Id Marca Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_marca', 'Marca:') !!}
    <select class="form-control" id="id_marca" name="id_marca">
        <option value="">Seleccione una marca</option>
        @foreach ($marcas as $marca)
            <option value="{{ $marca->id }}">{{ $marca->marca }}</option>
        @endforeach
    </select></div>

<!-- Modelo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('modelo', 'Modelo:') !!}
    {!! Form::text('modelo', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Anio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('anio', 'Año:') !!}
    {!! Form::number('anio', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Enviar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('modeloEquipos.index') }}" class="btn btn-light">Cancelar</a>
</div>
