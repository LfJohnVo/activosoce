@extends('layouts.app')
@section('title')
    Tenencias
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Tenencias</h1>
            <div class="section-header-breadcrumb">
                <a href="{{ route('tenencias.create') }}" class="btn btn-primary form-btn">Tenencia <i
                        class="fas fa-plus"></i></a>
            </div>
        </div>
        @include('flash::message')

        <div class="section-body">
            <div class="card">
                <div class="card-body">
                    @include('tenencias.table')
                </div>
            </div>
        </div>

    </section>
@endsection
