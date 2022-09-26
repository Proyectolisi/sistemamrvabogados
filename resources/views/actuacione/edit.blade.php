@extends('layouts.main', ['activePage' => 'actuaciones_editar', 'titlePage' => __('Actuaciones')])

@section('template_title')
    Update Actuacione
@endsection


@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title"><h2>Actualizar Actuación</h2></span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('actuaciones.update', $actuacione->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('actuacione.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
