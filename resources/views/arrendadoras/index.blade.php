@extends('layouts.app')
@section('title')
    Arrendadoras
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Arrendadoras</h1>
            <div class="section-header-breadcrumb">
                <a href="{{ route('arrendadoras.create') }}" class="btn btn-primary form-btn">Arrendadora <i
                        class="fas fa-plus"></i></a>
            </div>
        </div>
        @include('flash::message')
        <div class="section-body">
            <div class="card">
                <div class="card-body">
                    @include('arrendadoras.table')
                </div>
            </div>
        </div>

    </section>
@endsection
