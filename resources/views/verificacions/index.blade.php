@extends('layouts.app')
@section('title')
    Verificacions
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Verificaciones</h1>
            <div class="section-header-breadcrumb">
                <a href="{{ route('verificacions.create') }}" class="btn btn-primary form-btn">Verificacion <i
                        class="fas fa-plus"></i></a>
            </div>
        </div>
        @include('flash::message')
        <div class="section-body">
            <div class="card">
                <div class="card-body">
                    @include('verificacions.table')
                </div>
            </div>
        </div>

    </section>
@endsection
