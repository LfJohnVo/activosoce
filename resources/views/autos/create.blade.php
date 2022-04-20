@extends('layouts.app')
@section('title')
    Create Auto
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading m-0">Añadir Auto</h3>
            <div class="filter-container section-header-breadcrumb row justify-content-md-end">
                <a href="{{ route('autos.index') }}" class="btn btn-primary">Cancelar</a>
            </div>
        </div>
        <div class="content">
            @include('stisla-templates::common.errors')
            <div class="section-body">
               <div class="row">
                   <div class="col-lg-12">
                       <div class="card">
                           <div class="card-body ">
                                {!! Form::open(['route' => 'autos.store', 'enctype' => 'multipart/form-data']) !!}
                                    <div class="row">
                                        @include('autos.fields')
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
