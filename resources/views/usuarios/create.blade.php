@extends('layouts.app')
@section('title')
    Create Usuario
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="m-0 page__heading">Nuevo Usuario</h3>
            <div class="filter-container section-header-breadcrumb row justify-content-md-end">
                <a href="{{ route('usuarios.index') }}" class="btn btn-primary">Volver</a>
            </div>
        </div>
        <div class="content">
            @include('stisla-templates::common.errors')
            <div class="section-body">
               <div class="row">
                   <div class="col-lg-12">
                       <div class="card">
                           <div class="card-body ">
                                {!! Form::open(['route' => 'usuarios.store']) !!}
                                    <div class="row">
                                        @include('usuarios.fields')
                                    </div>
                                {!! Form::close() !!}
                           </div>
                       </div>
                   </div>
               </div>
            </div>
        </div>
    </section>
@endsection
