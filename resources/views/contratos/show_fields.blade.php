<!-- Id Arrendadora Field -->
<div class="form-group">
    {!! Form::label('id_arrendadora', 'Id Arrendadora:') !!}
    <p>{{ $contrato->id_arrendadora }}</p>
</div>

<!-- Plazo Field -->
<div class="form-group">
    {!! Form::label('plazo', 'Plazo:') !!}
    <p>{{ $contrato->plazo }}</p>
</div>

<!-- Fecha Inicio Field -->
<div class="form-group">
    {!! Form::label('fecha_inicio', 'Fecha Inicio:') !!}
    <p>{{ $contrato->fecha_inicio }}</p>
</div>

<!-- Fecha Final Field -->
<div class="form-group">
    {!! Form::label('fecha_final', 'Fecha Final:') !!}
    <p>{{ $contrato->fecha_final }}</p>
</div>

<!-- Monto Inicial Field -->
<div class="form-group">
    {!! Form::label('monto_inicial', 'Monto Inicial:') !!}
    <p>{{ $contrato->monto_inicial }}</p>
</div>

<!-- Monto Mensualidad Field -->
<div class="form-group">
    {!! Form::label('monto_mensualidad', 'Monto Mensualidad:') !!}
    <p>{{ $contrato->monto_mensualidad }}</p>
</div>

<!-- Estatus Field -->
<div class="form-group">
    {!! Form::label('estatus', 'Estatus:') !!}
    <p>{{ $contrato->estatus }}</p>
</div>

