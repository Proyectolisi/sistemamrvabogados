@extends('layouts.app')

@section('template_title')
    {{ $actuacione->name ?? 'Show Actuacione' }}
@endsection

@section('content')

si entra
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Actuacione</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('actuaciones.index') }}"> Back</a>
                        </div>
                    </div>
                    <div class="card-body">
                        
                        <iframe src="asset/{{$actuacione->file}}"></iframe>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection