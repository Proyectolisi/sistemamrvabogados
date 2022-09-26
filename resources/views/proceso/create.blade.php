@extends('layouts.main', ['activePage' => 'procesos_crear', 'titlePage' => __('Procesos')])

@section('template_title')
    Create Proceso
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title"><h2>Crear Proceso</h2></span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('procesos.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('proceso.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
