@extends('layouts.main', ['activePage' => 'procesos_editar', 'titlePage' => __('Procesos')])

@section('template_title')
    Actualizar Proceso
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title"><h2>Actualizar Proceso</h2></span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('procesos.update', $proceso->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('proceso.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
