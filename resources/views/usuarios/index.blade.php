@extends('layouts.app')
@section('title')
    Usuarios 
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Usuarios</h1>
            <div class="section-header-breadcrumb">
                <a href="{{ route('usuarios.create')}}" class="btn btn-primary form-btn">Usuario <i class="fas fa-plus"></i></a>
            </div>
        </div>
    <div class="section-body">
       <div class="card">
            <div class="card-body">
                @include('usuarios.table')
            </div>
       </div>
   </div>
    
    </section>
@endsection

