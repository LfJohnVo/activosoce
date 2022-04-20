<!-- Numeroempleado Field -->
<div class="form-group">
    {!! Form::label('numeroEmpleado', 'Numeroempleado:') !!}
    <p>{{ $empleado->numeroEmpleado }}</p>
</div>

<!-- Nombres Field -->
<div class="form-group">
    {!! Form::label('nombres', 'Nombres:') !!}
    <p>{{ $empleado->nombres }}</p>
</div>

<!-- Apellidopaterno Field -->
<div class="form-group">
    {!! Form::label('apellidoPaterno', 'Apellidopaterno:') !!}
    <p>{{ $empleado->apellidoPaterno }}</p>
</div>

<!-- Apellidomaterno Field -->
<div class="form-group">
    {!! Form::label('apellidoMaterno', 'Apellidomaterno:') !!}
    <p>{{ $empleado->apellidoMaterno }}</p>
</div>

<!-- Idproyecto Field -->
<div class="form-group">
    {!! Form::label('idProyecto', 'Idproyecto:') !!}
    <p>{{ $empleado->idProyecto }}</p>
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $empleado->email }}</p>
</div>

