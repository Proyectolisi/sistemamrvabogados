@extends('adminlte::page')  

@section('title', 'Inicio')

@section('content_header')
    <h1>Lista de Procesos</h1>
@stop

@section('template_title')
    Proceso
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                             <div class="float-right">
                                <a href="{{ route('admin.procesos.create') }}" class="btn btn-primary float-right"  data-placement="left">
                                  {{ __('Crear Nuevo Proceso') }}
                                </a>
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
                                        
                                        <th>Numero de Radicado</th>
                                        <th>Fecha de Radicado</th>                                        
										<th>Demandado</th>
										<th>Demandante</th>
                                        <th>Estado del Proceso</th>
                                        <th>Despacho del proceso</th>	
                                        <th>Descripción del proceso</th>
										<th>Jurisdiccion del proceso</th>									
										<th>Tipo de Proceso</th>
										<th>Etapa Procesal</th>																				
										<th>Abogado del proceso</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($procesos as $proceso)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
                                            <td>{{ $proceso->numero_radicado }}</td>
											<td>{{ $proceso->fecha_radicado }}</td>
                                            <td>{{ $proceso->demandado }}</td>
											<td>{{ $proceso->demandante }}</td>
                                            <td>{{ $proceso->estadoProceso->nombre }}</td>
                                            <td>{{ $proceso->despacho->nombreDespacho}}</td>	
                                            <td>{{ $proceso->descripcion }}</td>
											<td>{{ $proceso->jurisdiccion->nombre }}</td>											
											<td>{{ $proceso->tipoProceso->nombre }}</td>
											<td>{{ $proceso->etapaprocesal->nombre }}</td>																														
											<td>{{ $proceso->user->name }}</td>

                                            <td>
                                                <form action="{{ route('admin.procesos.destroy',$proceso->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('admin.procesos.show',$proceso->id) }}"><i class="fa fa-fw fa-eye"></i> Mostrar</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('admin.procesos.edit',$proceso->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Borrar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $procesos->links() !!}
            </div>
        </div>
    </div>
@endsection
