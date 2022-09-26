@extends('layouts.app')

@section('template_title')
    {{ $archivo->name ?? 'Show Archivo' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Archivo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('archivos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $archivo->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>File:</strong>
                            {{ $archivo->file }}
                        </div>
                        <div class="form-group">
                            <strong>User Id:</strong>
                            {{ $archivo->user_id }}
                        </div>
                        <div class="form-group">
                            <strong>Actuacion Id:</strong>
                            {{ $archivo->actuacion_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
