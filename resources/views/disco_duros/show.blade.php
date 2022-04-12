@extends('layouts.app')
@section('title')
    Disco Duro Details 
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
        <h1>Disco Duro Details</h1>
        <div class="section-header-breadcrumb">
            <a href="{{ route('discoDuros.index') }}"
                 class="btn btn-primary form-btn float-right">Back</a>
        </div>
      </div>
   @include('stisla-templates::common.errors')
    <div class="section-body">
           <div class="card">
            <div class="card-body">
                    @include('disco_duros.show_fields')
            </div>
            </div>
    </div>
    </section>
@endsection
