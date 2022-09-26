@extends('adminlte::page')  

@section('title', 'Inicio')

@section('template_title')
    {{ $circuito->name ?? 'Mostrar Circuito' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                        <h2>Mostrar Circuito</h2></span>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre Circuito:</strong>
                            {{ $circuito->nombreCircuito }}
                        </div>
                        <div class="form-group">
                            <strong>Usuario:</strong>
                            {{ $circuito->user->name }}
                        </div>

                    </div>
                </div>
                <div class="box-footer mt20">
                    <a class="btn btn-primary" href="{{ route('admin.circuitos.index') }}"> Regresar</a>
                 </div>

            </div>
        </div>
    </section>
@endsection

