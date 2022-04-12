@extends('layouts.app')
@section('title')
    Disco Duros 
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Disco Duros</h1>
            <div class="section-header-breadcrumb">
                <a href="{{ route('discoDuros.create')}}" class="btn btn-primary form-btn">Disco Duro <i class="fas fa-plus"></i></a>
            </div>
        </div>
    <div class="section-body">
       <div class="card">
            <div class="card-body">
                @include('disco_duros.table')
            </div>
       </div>
   </div>
    
    </section>
@endsection

