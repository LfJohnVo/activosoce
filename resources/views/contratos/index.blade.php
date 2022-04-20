@extends('layouts.app')
@section('title')
    Contratos 
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Contratos</h1>
            <div class="section-header-breadcrumb">
                <a href="{{ route('contratos.create')}}" class="btn btn-primary form-btn">Contrato <i class="fas fa-plus"></i></a>
            </div>
        </div>
    <div class="section-body">
       <div class="card">
            <div class="card-body">
                @include('contratos.table')
            </div>
       </div>
   </div>
    
    </section>
@endsection

