<!-- Iddocumentosautos Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idDocumentosAutos', 'Documentos autos:') !!}
    {!! Form::number('idDocumentosAutos', null, ['class' => 'form-control']) !!}
</div>

<!-- Verificacion Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('verificacion', 'Verificación:') !!}
    {!! Form::textarea('verificacion', null, ['class' => 'form-control']) !!}
</div>

<!-- Bimestre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bimestre', 'Bimestre:') !!}
    {!! Form::text('bimestre', null, ['class' => 'form-control','maxlength' => 45,'maxlength' => 45]) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Enviar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('verificacions.index') }}" class="btn btn-light">Cancelar</a>
</div>
