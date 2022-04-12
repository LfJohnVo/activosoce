@extends('layouts.app')
@section('title')
    Documento Autos
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Documento Autos</h1>
            <div class="section-header-breadcrumb">
                <a href="{{ route('documentoAutos.create') }}" class="btn btn-primary form-btn">Documento Auto <i
                        class="fas fa-plus"></i></a>
            </div>
        </div>
        @include('flash::message')
        <div class="section-body">
            <div class="card">
                <div class="card-body">
                    @include('documento_autos.table')
                </div>
            </div>
        </div>

    </section>
@endsection
