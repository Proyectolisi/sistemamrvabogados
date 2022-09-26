@extends('layouts.main', ['activePage' => 'despachos_mostrar', 'titlePage' => __('Despachos_mostrar')])

@section('template_title')
    {{ $despacho->name ?? 'Show Despacho' }}
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
                            <a class="btn btn-primary" href="{{ route('despachos.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Municipio del Despacho:</strong>
                            {{  $despacho->municipio->nombreMunicipio }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre del  Despacho:</strong>
                            {{ $despacho->nombreDespacho }}
                        </div>
                        <div class="form-group">
                            <strong>Correo del Despacho:</strong>
                            {{ $despacho->correoDespacho }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
