@extends('layouts.main', ['activePage' => 'actuaciones_crear', 'titlePage' => __('Actuaciones')])

@section('template_title')
    Create Actuacione
@endsection


@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    
                    <div class="card-body">
                        <form method="POST" action="{{ route('actuaciones.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('actuacione.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
