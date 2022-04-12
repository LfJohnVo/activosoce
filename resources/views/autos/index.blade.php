@extends('layouts.app')
@section('title')
    Autos
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Autos</h1>
            <div class="section-header-breadcrumb">
                <a href="{{ route('autos.create') }}" class="btn btn-primary form-btn">Auto <i class="fas fa-plus"></i></a>
            </div>
        </div>
        @include('flash::message')
        <div class="section-body">
            <div class="card">
                <div class="card-body">
                    @include('autos.table')
                </div>
            </div>
        </div>

    </section>
@endsection
