@extends('layouts.app')
@section('title')
    Rams 
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Rams</h1>
            <div class="section-header-breadcrumb">
                <a href="{{ route('rams.create')}}" class="btn btn-primary form-btn">Ram <i class="fas fa-plus"></i></a>
            </div>
        </div>
    <div class="section-body">
       <div class="card">
            <div class="card-body">
                @include('rams.table')
            </div>
       </div>
   </div>
    
    </section>
@endsection

