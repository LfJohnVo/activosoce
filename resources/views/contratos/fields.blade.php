<!-- Id Arrendadora Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_arrendadora', 'Arrendadora:') !!}
    <select class="form-control" id="id_arrendadora" name="id_arrendadora" required>
        <option value="">Seleccione una opción </option>
        @foreach ($arrendadoras as $arre)
            <option value="{{ $arre->id }}">
                {{ $arre->nombre }}</option>
        @endforeach
    </select>
</div>

<!-- Plazo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('plazo', 'Plazo:') !!}
    {!! Form::text('plazo', null, ['class' => 'form-control', 'maxlength' => 32, 'maxlength' => 32, 'required']) !!}
</div>

<!-- Fecha Inicio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_inicio', 'Fecha Inicio:') !!}
    {!! Form::date('fecha_inicio', null, ['class' => 'form-control', 'id' => 'fecha_inicio', 'required']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#fecha_inicio').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Fecha Final Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_final', 'Fecha Final:') !!}
    {!! Form::date('fecha_final', null, ['class' => 'form-control', 'id' => 'fecha_final', 'required']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#fecha_final').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Monto Inicial Field -->
<div class="form-group col-sm-6">
    {!! Form::label('monto_inicial', 'Monto Inicial:') !!}
    {!! Form::number('monto_inicial', null, ['class' => 'form-control']) !!}
</div>

<!-- Monto Mensualidad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('monto_mensualidad', 'Monto Mensualidad:') !!}
    {!! Form::number('monto_mensualidad', null, ['class' => 'form-control']) !!}
</div>

<!-- Estatus Field -->
<div class="form-group col-sm-6">
    {!! Form::label('estatus', 'Estatus:') !!}
    {!! Form::text('estatus', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Enviar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('contratos.index') }}" class="btn btn-light">Cancelar</a>
</div>
