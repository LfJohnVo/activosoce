<!-- Idtipo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idTipo', 'Tipo:') !!}
    <select class="form-control" id="idTipo" name="idTipo">
        <option value="{{ $tipos['id'] }}">{{ $tipos['tipoEquipo'] }}</option>
    </select>
</div>

<!-- Idmarca Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idMarca', 'Marca:') !!}
    <select class="form-control" id="idMarca" name="idMarca">
        @foreach ($marcas as $marca)
            <option value="{{ $marca->id }}">{{ $marca->marca }}</option>
        @endforeach
    </select>
</div>

<!-- Idmodelo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idmodelo', 'Modelo:') !!}
    <select class="form-control" id="idmodelo" name="idmodelo">
        @foreach ($modelos as $modelo)
            <option value="{{ $modelo->id }}">{{ $modelo->modelo }} / {{ $modelo->anio }}</option>
        @endforeach
    </select>
</div>

<!-- Idempleado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idEmpleado', 'Empleado:') !!}
    <select class="form-control" id="idEmpleado" name="idEmpleado">
        @foreach ($empleados as $empleado)
            <option value="{{ $empleado->id }}">{{ $empleado->numeroEmpleado }} / {{ $empleado->nombres }}
                {{ $empleado->apellidoPaterno }} {{ $empleado->apellidoMaterno }}</option>
        @endforeach
    </select>
</div>

<!-- Foto Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('foto', 'Foto:') !!}
    <input type="file" class="form-control-file" id="foto" name="foto">

</div>

<!-- Color Field -->
<div class="form-group col-sm-6">
    {!! Form::label('color', 'Color:') !!}
    {!! Form::text('color', null, ['class' => 'form-control', 'maxlength' => 45, 'maxlength' => 45]) !!}
</div>

<!-- Placas Field -->
<div class="form-group col-sm-6">
    {!! Form::label('numeroSerie', 'Número Serie:') !!}
    {!! Form::text('numeroSerie', null, ['class' => 'form-control', 'maxlength' => 45, 'maxlength' => 45]) !!}
</div>

<!-- Placas Field -->
<div class="form-group col-sm-6">
    {!! Form::label('numeroMotor', 'Número Motor:') !!}
    {!! Form::text('numeroMotor', null, ['class' => 'form-control', 'maxlength' => 45, 'maxlength' => 45]) !!}
</div>

<!-- Placas Field -->
<div class="form-group col-sm-6">
    {!! Form::label('placas', 'Placas:') !!}
    {!! Form::text('placas', null, ['class' => 'form-control', 'maxlength' => 45, 'maxlength' => 45]) !!}
</div>

<!-- Anio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('anio', 'Año:') !!}
    {!! Form::number('anio', null, ['class' => 'form-control']) !!}
</div>

<!-- Precio Compra Field -->
<div class="form-group col-sm-6">
    {!! Form::label('precio_Compra', 'Precio Compra:') !!}
    {!! Form::number('precio_Compra', null, ['class' => 'form-control']) !!}
</div>

<!-- Kminicial Field -->
<div class="form-group col-sm-6">
    {!! Form::label('kmInicial', 'Km inicial:') !!}
    {!! Form::number('kmInicial', null, ['class' => 'form-control']) !!}
</div>

<!-- Kmfinal Field -->
<div class="form-group col-sm-6">
    {!! Form::label('kmFinal', 'Km final:') !!}
    {!! Form::number('kmFinal', null, ['class' => 'form-control']) !!}
</div>

<!-- Estatus Field -->
<div class="form-group col-sm-6">
    {!! Form::label('estatus', 'Estatus:') !!}
    <select class="form-control" id="estatus" name="estatus">
        <option value=" Activo">Activo</option>
        <option value="Inactivo">Inactivo</option>
    </select>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Enviar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('autos.index') }}" class="btn btn-light">Cancelar</a>
</div>
