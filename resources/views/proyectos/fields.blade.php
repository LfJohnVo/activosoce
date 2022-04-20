<!-- Numeroproyecto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('numeroProyecto', 'Numero proyecto:') !!}
    {!! Form::number('numeroProyecto', null, ['class' => 'form-control']) !!}
</div>

<!-- Nombreproyecto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombreProyecto', 'Nombre proyecto:') !!}
    {!! Form::text('nombreProyecto', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
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
    <a href="{{ route('proyectos.index') }}" class="btn btn-light">Cancelar</a>
</div>
