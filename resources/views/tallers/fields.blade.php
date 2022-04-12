<!-- Nombretaller Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombreTaller', 'Nombre taller:') !!}
    {!! Form::text('nombreTaller', null, ['class' => 'form-control','maxlength' => 150,'maxlength' => 150]) !!}
</div>

<!-- Direccion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('direccion', 'Dirección:') !!}
    {!! Form::text('direccion', null, ['class' => 'form-control','maxlength' => 1000,'maxlength' => 1000]) !!}
</div>

<!-- Telefono Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telefono', 'Telefono:') !!}
    {!! Form::text('telefono', null, ['class' => 'form-control','maxlength' => 55,'maxlength' => 55]) !!}
</div>

<!-- Emal Field -->
<div class="form-group col-sm-6">
    {!! Form::label('emal', 'Email:') !!}
    {!! Form::text('emal', null, ['class' => 'form-control','maxlength' => 100,'maxlength' => 100]) !!}
</div>

<!-- Estatus Field -->
{{-- <div class="form-group col-sm-6">
    {!! Form::label('estatus', 'Estatus:') !!}
    {!! Form::text('estatus', null, ['class' => 'form-control']) !!}
</div> --}}

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Enviar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('tallers.index') }}" class="btn btn-light">Cancelar</a>
</div>
