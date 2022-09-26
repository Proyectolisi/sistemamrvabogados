@extends('adminlte::page')  

@section('title', 'Inicio')


@section('template_title')
    Actualizar Municipio
@endsection


@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title"><h2>Actualizar Municipio</h2></span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.municipios.update', $municipio->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('admin.municipio.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
