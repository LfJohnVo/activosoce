<!-- Idtenencias Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idTenencias', 'Tenencias:') !!}
    {!! Form::number('idTenencias', null, ['class' => 'form-control']) !!}
</div>

<!-- Anio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('anio', 'Año:') !!}
    {!! Form::number('anio', null, ['class' => 'form-control']) !!}
</div>

<!-- Iddocumentoauto Field -->
{{-- <div class="form-group col-sm-6">
    {!! Form::label('idDocumentoAuto', 'Iddocumentoauto:') !!}
    {!! Form::number('idDocumentoAuto', null, ['class' => 'form-control']) !!}
</div> --}}

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Enviar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('tenencias.index') }}" class="btn btn-light">Cancelar</a>
</div>
