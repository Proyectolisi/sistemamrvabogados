@extends('adminlte::page')  

@section('title', 'Inicio')

@section('template_title')
    Despacho
@endsection

@section('content_header')
    <h1>Listado de Despachos</h1>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            
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
										<th>Usuario</th>
                                        
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
											<td>{{ $despacho->user->name }}</td>

                                            <td>
                                                <form action="{{ route('admin.despachos.destroy',$despacho->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('admin.despachos.show',$despacho->id) }}"><i class="fa fa-fw fa-eye"></i> Mostrar</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('admin.despachos.edit',$despacho->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
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
                {!! $despachos->links() !!}
            </div>
        </div>
    </div>
@endsection
