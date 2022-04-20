<!-- Tipomemoria Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipoMemoria', 'Tipomemoria:') !!}
    {!! Form::text('tipoMemoria', null, ['class' => 'form-control','maxlength' => 10,'maxlength' => 10]) !!}
</div>

<!-- Capacidad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('capacidad', 'Capacidad:') !!}
    {!! Form::text('capacidad', null, ['class' => 'form-control','maxlength' => 45,'maxlength' => 45]) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('rams.index') }}" class="btn btn-light">Cancel</a>
</div>
