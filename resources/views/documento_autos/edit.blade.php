@extends('layouts.app')
@section('title')
    Edit Documento Auto
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="m-0 page__heading">Edit Documento Auto</h3>
            <div class="filter-container section-header-breadcrumb row justify-content-md-end">
                <a href="{{ route('documentoAutos.index') }}" class="btn btn-primary">Back</a>
            </div>
        </div>
        <div class="content">
            @include('stisla-templates::common.errors')
            <div class="section-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body ">
                                {!! Form::model($documentoAuto, ['route' => ['documentoAutos.update', $documentoAuto->id], 'method' => 'patch', 'enctype' => 'multipart/form-data']) !!}
                                <div class="row">
                                    @include('documento_autos.fieldsedit')
                                </div>

                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
