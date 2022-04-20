<!-- Numeroempleado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('numeroEmpleado', 'Numero empleado:') !!}
    {!! Form::number('numeroEmpleado', null, ['class' => 'form-control']) !!}
</div>

<!-- Nombres Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombres', 'Nombres:') !!}
    {!! Form::text('nombres', null, ['class' => 'form-control','maxlength' => 100,'maxlength' => 100]) !!}
</div>

<!-- Apellidopaterno Field -->
<div class="form-group col-sm-6">
    {!! Form::label('apellidoPaterno', 'Apellido paterno:') !!}
    {!! Form::text('apellidoPaterno', null, ['class' => 'form-control','maxlength' => 100,'maxlength' => 100]) !!}
</div>

<!-- Apellidomaterno Field -->
<div class="form-group col-sm-6">
    {!! Form::label('apellidoMaterno', 'Apellido materno:') !!}
    {!! Form::text('apellidoMaterno', null, ['class' => 'form-control','maxlength' => 100,'maxlength' => 100]) !!}
</div>

<!-- Idproyecto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idProyecto', 'Proyecto:') !!}
    {!! Form::number('idProyecto', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control','maxlength' => 150,'maxlength' => 150]) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Enviar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('empleados.index') }}" class="btn btn-light">Cancelar</a>
</div>
