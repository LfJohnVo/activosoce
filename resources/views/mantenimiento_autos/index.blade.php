@extends('layouts.app')
@section('title')
    Mantenimiento Autos
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Mantenimiento Autos</h1>
            <div class="section-header-breadcrumb">
                <a href="{{ route('mantenimientoAutos.create') }}" class="btn btn-primary form-btn">Mantenimiento Auto <i
                        class="fas fa-plus"></i></a>
            </div>
        </div>
        @include('flash::message')
        <div class="section-body">
            <div class="card">
                <div class="card-body">
                    @include('mantenimiento_autos.table')
                </div>
            </div>
        </div>

    </section>
@endsection
