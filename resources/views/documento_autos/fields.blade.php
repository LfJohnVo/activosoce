<!-- Idauto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idAuto', 'Auto:') !!}
    <select class="form-control" id="idAuto" name="idAuto" required>
        <option value="">Seleccione un auto por placa</option>
        @foreach ($autos as $auto)
            <option value="{{ $auto->id }}">{{ $auto->placas }}</option>
        @endforeach
    </select>
</div>

<!-- Tarjeton Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('tarjeton', 'Tarjetón:') !!}
    <!-- Foto Field -->
    <input type="file" accept="application/pdf,application" class="form-control-file" id="tarjeton" name="tarjeton">
</div>

<!-- Factura Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('factura', 'Factura:') !!}
    <input type="file" accept="application/pdf,application" class="form-control-file" id="factura" name="factura">
</div>

<!-- Responsivaempleado Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('responsivaEmpleado', 'Responsiva empleado:') !!}
    <input type="file" accept="application/pdf,application" class="form-control-file" id="responsivaEmpleado"
        name="responsivaEmpleado">
</div>

<!-- Ultimatenencia Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('ultimaTenencia', 'Ultima tenencia:') !!}
    <input type="file" accept="application/pdf,application" class="form-control-file" id="ultimaTenencia"
        name="ultimaTenencia">
</div>

<!-- Ultimaverificacion Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('ultimaVerificacion', 'Ultima verificación:') !!}
    <input type="file" accept="application/pdf,application" class="form-control-file" id="ultimaVerificacion"
        name="ultimaVerificacion">
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Enviar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('documentoAutos.index') }}" class="btn btn-light">Cancelar</a>
</div>
