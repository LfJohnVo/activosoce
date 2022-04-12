@extends('layouts.app')
@section('title')
    Tenencia Details 
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
        <h1>Tenencia Details</h1>
        <div class="section-header-breadcrumb">
            <a href="{{ route('tenencias.index') }}"
                 class="btn btn-primary form-btn float-right">Back</a>
        </div>
      </div>
   @include('stisla-templates::common.errors')
    <div class="section-body">
           <div class="card">
            <div class="card-body">
                    @include('tenencias.show_fields')
            </div>
            </div>
    </div>
    </section>
@endsection
