@extends('adminlte::page')  

@section('title', 'Inicio')

@section('template_title')
    Crear Actuacion
@endsection

@section('content_header')
    <h1>Crear Actuación</h1>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    
                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.actuaciones.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('admin.actuacione.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
