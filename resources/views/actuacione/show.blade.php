@extends('layouts.main', ['activePage' => 'actuaciones_mostrar', 'titlePage' => __('Actuaciones')])

@section('template_title')
    {{ $actuacione->name ?? 'Show Actuacione' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title"><h2>Mostrar Actuación</h2></span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('actuaciones.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Fecha Actuacion:</strong>
                            {{ $actuacione->fecha_actuacion }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo de Actuacion:</strong>
                            {{ $actuacione->tipoActuacione->nombre  }}
                        </div>
                        <div class="form-group">
                            <strong>Proceso de la Actuación:</strong>
                            {{ $actuacione->proceso->numero_radicado }}
                        </div>
                        <div class="form-group">
                            <strong>Anotaciones:</strong>
                            {{ $actuacione->anotacion }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Inicio Termino:</strong>
                            {{ $actuacione->fecha_inicio_termino }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Finaliza Termino:</strong>
                            {{ $actuacione->fecha_finaliza_termino }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha de Registro:</strong>
                            {{ $actuacione->fecha_registro }}
                        </div>
                        <div class="form-group">
                            <strong>Archivo:</strong>
                            {{ $actuacione->file }}
                        </div>
                        <div class="form-group">
                            <strong>Abogado de la actuación:</strong>
                            {{  $actuacione->user->name }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
