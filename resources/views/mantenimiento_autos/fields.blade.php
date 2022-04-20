<!-- Idauto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idAuto', 'Auto:') !!}
    <select class="form-control" id="idAuto" name="idAuto" required>
        <option value="">Seleccione una opción </option>
        @foreach ($autos as $auto)
            <option value="{{ $auto->id }}">
                {{ $auto->placas }}</option>
        @endforeach
    </select>
</div>

<!-- Idtaller Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idTaller', 'Taller:') !!}
    <select class="form-control" id="idTaller" name="idTaller" required>
        <option value="">Seleccione una opción </option>
        @foreach ($talleres as $taller)
            <option value="{{ $taller->id }}">
                {{ $taller->nombreTaller }}</option>
        @endforeach
    </select>
</div>

<!-- Kilometraje Field -->
<div class="form-group col-sm-6">
    {!! Form::label('kilometraje', 'Kilometraje:') !!}
    {!! Form::number('kilometraje', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Fechaingreso Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fechaIngreso', 'Fecha ingreso:') !!}
    {!! Form::date('fechaIngreso', null, ['class' => 'form-control', 'id' => 'datepicker', 'required']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#fechaIngreso').datetimepicker({
            format: 'YYYY-MM-DD',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<script>
    $('#datepicker').datepicker({
        uiLibrary: 'bootstrap4',
        locale: 'es-es',
    });
</script>

<!-- Fechaentrega Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fechaEntrega', 'Fecha entrega:') !!}
    {!! Form::date('fechaEntrega', null, ['class' => 'form-control', 'id' => 'fechaEntrega' , 'required']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#fechaEntrega').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Motivoingreso Field -->
<div class="form-group col-sm-6">
    {!! Form::label('motivoIngreso', 'Motivo ingreso:') !!}
    {!! Form::text('motivoIngreso', null, ['class' => 'form-control', 'maxlength' => 2000, 'maxlength' => 2000, 'required']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('mantenimientoAutos.index') }}" class="btn btn-light">Cancelar</a>
</div>
