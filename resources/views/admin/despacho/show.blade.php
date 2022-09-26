@extends('adminlte::page')  

@section('title', 'Inicio')

@section('template_title')
    {{ $despacho->name ?? 'Mostrar Despacho' }}
@endsection


@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title"><h2>Mostrar Despacho</h2></span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('admin.despachos.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Municipio:</strong>
                            {{  $despacho->municipio->nombreMunicipio }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre Despacho:</strong>
                            {{ $despacho->nombreDespacho }}
                        </div>
                        <div class="form-group">
                            <strong>Correo Despacho:</strong>
                            {{ $despacho->correoDespacho }}
                        </div>
                        <div class="form-group">
                            <strong>Usuario:</strong>
                            {{ $despacho->user->name }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
