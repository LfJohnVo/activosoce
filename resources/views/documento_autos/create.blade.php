@extends('layouts.app')
@section('title')
    Create Documento Auto
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading m-0">Añadir nuevo documento para auto</h3>
            <div class="filter-container section-header-breadcrumb row justify-content-md-end">
                <a href="{{ route('documentoAutos.index') }}" class="btn btn-primary">Volver</a>
            </div>
        </div>
        <div class="content">
            @include('stisla-templates::common.errors')
            <div class="section-body">
               <div class="row">
                   <div class="col-lg-12">
                       <div class="card">
                           <div class="card-body ">
                                {!! Form::open(['route' => 'documentoAutos.store', 'enctype' => 'multipart/form-data']) !!}
                                    <div class="row">
                                        @include('documento_autos.fields')
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
