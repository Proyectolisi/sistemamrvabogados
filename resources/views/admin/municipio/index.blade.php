@extends('adminlte::page')  

@section('title', 'Inicio')


@section('template_title')
    Municipio
@endsection

@section('content_header')
    <h1>Listado de Municipios</h1>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                             <div class="float-right">
                                <a href="{{ route('admin.municipios.create') }}" class="btn btn-primary float-right"  data-placement="left">
                                  {{ __('Crear Nuevo Municipio') }}
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
                                        
										<th>Circuito</th>
										<th>Nombre Municipio</th>
										<th>Usuario</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($municipios as $municipio)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $municipio->circuito->nombreCircuito }}</td>
											<td>{{ $municipio->nombreMunicipio }}</td>
											<td>{{ $municipio->user->name  }}</td>

                                            <td>
                                                <form action="{{ route('admin.municipios.destroy',$municipio->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('admin.municipios.show',$municipio->id) }}"><i class="fa fa-fw fa-eye"></i> Mostrar</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('admin.municipios.edit',$municipio->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
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
                {!! $municipios->links() !!}
            </div>
        </div>
    </div>
@endsection
