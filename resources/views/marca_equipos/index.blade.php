@extends('layouts.app')
@section('title')
    Marca Equipos
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Marca Equipos</h1>
            <div class="section-header-breadcrumb">
                <a href="{{ route('marcaEquipos.create') }}" class="btn btn-primary form-btn">Marca Equipo <i
                        class="fas fa-plus"></i></a>
            </div>
        </div>
        @include('flash::message')
        <div class="section-body">
            <div class="card">
                <div class="card-body">
                    @include('marca_equipos.table')
                </div>
            </div>
        </div>

    </section>
@endsection
