@extends('layouts.app')
@section('title')
    Tipo Equipos 
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Tipo Equipos</h1>
            <div class="section-header-breadcrumb">
                <a href="{{ route('tipoEquipos.create')}}" class="btn btn-primary form-btn">Tipo Equipo <i class="fas fa-plus"></i></a>
            </div>
        </div>
    <div class="section-body">
       <div class="card">
            <div class="card-body">
                @include('tipo_equipos.table')
            </div>
       </div>
   </div>
    
    </section>
@endsection

