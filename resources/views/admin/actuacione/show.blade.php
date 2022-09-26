@extends('adminlte::page')  

@section('title', 'Inicio')

@section('template_title')
    {{ $actuacione->name ?? 'Mostrar Actuacion' }}
@endsection


@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title"><h2> Mostrar Actuación</h2></span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('admin.actuaciones.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Fecha de la Actuacion:</strong>
                            {{ $actuacione->fecha_actuacion }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo de Actuacion:</strong>
                            {{ $actuacione->tipo_actuacion_id }}
                        </div>
                        <div class="form-group">
                            <strong>Anotaciones:</strong>
                            {{ $actuacione->anotacion }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Inicio del Termino:</strong>
                            {{ $actuacione->fecha_inicio_termino }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Finaliza Termino:</strong>
                            {{ $actuacione->fecha_finaliza_termino }}
                        </div>
                        <div class="form-group">
                            <strong>Abogado de la Actuación:</strong>
                            {{ $actuacione->user->name }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
