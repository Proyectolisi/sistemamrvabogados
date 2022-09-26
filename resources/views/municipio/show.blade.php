@extends('layouts.main', ['activePage' => 'municipios_mostrar', 'titlePage' => __('Municipios')])

@section('template_title')
    {{ $municipio->name ?? 'Show Municipio' }}
@endsection



@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title"><h2>Mostrar Municipio</h2></span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('municipios.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Circuito del Municipio:</strong>
                            {{ $municipio->circuito->nombreCircuito }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre del  Municipio:</strong>
                            {{ $municipio->nombreMunicipio }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

