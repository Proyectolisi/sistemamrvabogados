@extends('layouts.main', ['activePage' => 'procesos_mostrar', 'titlePage' => __('Procesos')])

@section('template_title')
    {{ $proceso->name ?? 'Show Proceso' }}
@endsection



@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title"><h2>Mostrar Proceso</h2></span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('procesos.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Numero Radicado:</strong>
                            {{ $proceso->numero_radicado }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Radicado:</strong>
                            {{ $proceso->fecha_radicado }}
                        </div>
                        <div class="form-group">
                            <strong>Demandado:</strong>
                            {{ $proceso->demandado }}
                        </div>
                        <div class="form-group">
                            <strong>Demandante:</strong>
                            {{ $proceso->demandante }}
                        </div>
                        <div class="form-group">
                            <strong>Jurisdiccion:</strong>
                            {{ $proceso->jurisdiccion->nombre}}
                        </div>
                        <div class="form-group">
                            <strong>Estado Proceso:</strong>
                            {{ $proceso->estadoProceso->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo Proceso:</strong>
                            {{ $proceso->tipoProceso->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Etapa Procesal:</strong>
                            {{ $proceso->etapaprocesal->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Juzgado:</strong>
                            {{ $proceso->despacho->nombreDespacho }}
                        </div>                     
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $proceso->descripcion }}
                        </div>                      
                        <div class="form-group">
                            <strong>Abogado del Proceso:</strong>
                            {{ $proceso->user->name }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
