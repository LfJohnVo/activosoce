@extends('layouts.app')
@section('title')
    Empleados 
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Empleados</h1>
            <div class="section-header-breadcrumb">
                <a href="{{ route('empleados.create')}}" class="btn btn-primary form-btn">Empleado <i class="fas fa-plus"></i></a>
            </div>
        </div>
    <div class="section-body">
       <div class="card">
            <div class="card-body">
                @include('empleados.table')
            </div>
       </div>
   </div>
    
    </section>
@endsection

