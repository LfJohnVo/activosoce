@extends('layouts.app')
@section('title')
    Equipos 
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Equipos</h1>
            <div class="section-header-breadcrumb">
                <a href="{{ route('equipos.create')}}" class="btn btn-primary form-btn">Equipo <i class="fas fa-plus"></i></a>
            </div>
        </div>
    <div class="section-body">
       <div class="card">
            <div class="card-body">
                @include('equipos.table')
            </div>
       </div>
   </div>
    
    </section>
@endsection

