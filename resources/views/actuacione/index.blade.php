@extends('layouts.main', ['activePage' => 'actuaciones', 'titlePage' => __('Actuaciones')])

@section('template_title')
    Actuacione
@endsection



@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                <div class="card-header">
                <div class="float-left">
                        <h2>Listado de Actuaciones</h2></span>
                        </div>
                </div>
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                             <div class="float-right">
                                <a href="{{ route('actuaciones.create') }}" class="btn btn-primary btn float-right"  data-placement="left">
                                  {{ __('Crear Nueva Actuación') }}
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
                                        
										<th>Fecha de Actuación</th>
										<th>Tipo Actuación</th>
										<th>Proceso de la Actuación</th>
										<th>Anotaciones</th>
										<th>Fecha Inicio Termino</th>
										<th>Fecha Finalización Termino</th>
										<th>Fecha de Registro</th>
										<th>Archivo de la Actuación</th>
										<th>Abogado de la Actuación</th>
                                        <th>Ver Archivo</th>
                                        <th>Descargar Archivo</th>
                                        
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($actuaciones as $actuacione)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $actuacione->fecha_actuacion }}</td>
											<td>{{ $actuacione->tipoActuacione->nombre }}</td>
											<td>{{ $actuacione->proceso->numero_radicado }}</td>
											<td>{{ $actuacione->anotacion }}</td>
											<td>{{ $actuacione->fecha_inicio_termino }}</td>
											<td>{{ $actuacione->fecha_finaliza_termino }}</td>
											<td>{{ $actuacione->fecha_registro }}</td>
											<td>{{ $actuacione->file }}</td>											
                                            <td>{{ $actuacione->user->name }}</td>                                            
                                            <td><a href="{{ url('actuaciones/view', $actuacione->id)}}">Ver Archivo</a></td>
                                            <td><a href="{{ url('/download', $actuacione->file)}}">Descargar Archivo</a></td>

                                            <td>
                                                <form action="{{ route('actuaciones.destroy',$actuacione->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('actuaciones.show',$actuacione->id) }}"><i class="fa fa-fw fa-eye"></i> Mostrar</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('actuaciones.edit',$actuacione->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
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
                {!! $actuaciones->links() !!}
            </div>
        </div>
    </div>
@endsection
