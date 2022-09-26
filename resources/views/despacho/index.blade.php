@extends('layouts.main', ['activePage' => 'despachos', 'titlePage' => __('Despachos')])

@section('template_title')
    Despacho
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                        <div class="card-header">
                            <div class="float-left">
                                <h2>Listado de Despachos</h2></span>
                            </div>
                        </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Municipio del Despacho</th>
										<th>Nombre del Despacho</th>
										<th>Correo del Despacho</th>
										
                                        
                                        <th colspan="3"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($despachos as $despacho)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $despacho->municipio->nombreMunicipio }}</td>
											<td>{{ $despacho->nombreDespacho }}</td>
											<td>{{ $despacho->correoDespacho }}</td>
											

                                            <td>
                                                
                                                    <a class="btn btn-sm btn-primary " href="{{ route('despachos.show',$despacho->id) }}"><i class="fa fa-fw fa-eye"></i> Mostrar</a>
                                                    
                                                    @csrf
                                                    
                                                    
                                                
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $despachos->links() !!}
            </div>
        </div>
    </div>
@endsection
