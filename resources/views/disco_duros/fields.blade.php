<!-- Tipodiscoduro Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipoDiscoDuro', 'Tipodiscoduro:') !!}
    {!! Form::text('tipoDiscoDuro', null, ['class' => 'form-control','maxlength' => 45,'maxlength' => 45]) !!}
</div>

<!-- Capacidad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('capacidad', 'Capacidad:') !!}
    {!! Form::text('capacidad', null, ['class' => 'form-control','maxlength' => 45,'maxlength' => 45]) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('discoDuros.index') }}" class="btn btn-light">Cancel</a>
</div>
