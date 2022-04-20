<!-- Nombre Field -->
<div class="form-group">
    {!! Form::label('nombre', 'Nombre:') !!}
    <p>{{ $arrendadora->nombre }}</p>
</div>

<!-- Razonsocial Field -->
<div class="form-group">
    {!! Form::label('razonSocial', 'Razonsocial:') !!}
    <p>{{ $arrendadora->razonSocial }}</p>
</div>

<!-- Rfc Field -->
<div class="form-group">
    {!! Form::label('rfc', 'Rfc:') !!}
    <p>{{ $arrendadora->rfc }}</p>
</div>

<!-- Direccion Field -->
<div class="form-group">
    {!! Form::label('direccion', 'Direccion:') !!}
    <p>{{ $arrendadora->direccion }}</p>
</div>

<!-- Estatus Field -->
<div class="form-group">
    {!! Form::label('estatus', 'Estatus:') !!}
    <p>{{ $arrendadora->estatus }}</p>
</div>

