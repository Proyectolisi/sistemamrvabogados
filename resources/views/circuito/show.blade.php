@extends('layouts.app')

@section('template_title')
    {{ $circuito->name ?? 'Show Circuito' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Circuito</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('circuitos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombrecircuito:</strong>
                            {{ $circuito->nombreCircuito }}
                        </div>
                        <div class="form-group">
                            <strong>User Id:</strong>
                            {{ $circuito->user_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
