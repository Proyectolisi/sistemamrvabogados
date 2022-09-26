@extends('adminlte::page')  

@section('title', 'Inicio')

@section('template_title')
    Crear Despacho
@endsection


@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title"><h2>Crear Despacho</h2></span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.despachos.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('admin.despacho.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
