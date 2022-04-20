@extends('layouts.app')
@section('title')
    Tallers
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Tallers</h1>
            <div class="section-header-breadcrumb">
                <a href="{{ route('tallers.create') }}" class="btn btn-primary form-btn">Taller <i
                        class="fas fa-plus"></i></a>
            </div>
        </div>
        @include('flash::message')

        <div class="section-body">
            <div class="card">
                <div class="card-body">
                    @include('tallers.table')
                </div>
            </div>
        </div>

    </section>
@endsection
