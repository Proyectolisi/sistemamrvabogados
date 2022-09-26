@extends('adminlte::page')  

@section('title', 'Inicio')

@section('template_title')
    Circuito
@endsection

@section('content_header')
    <h1>Listado de Circuitos</h1>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                             <div class="float-right">
                                <a href="{{ route('admin.circuitos.create') }}" class="btn btn-primary float-right"  data-placement="left">
                                  {{ __('Crear Nuevo Circuito') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                    
                    <div class="card">
                        <div class="card-header">
                            <input model="search" class="form-control" placeholder="Ingrese el nombre del circuito">
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Nombre</th>
										<th>Usuario</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($circuitos as $circuito)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $circuito->nombreCircuito }}</td>
											<td>{{ $circuito->user->name }}</td>

                                            <td>
                                                <form action="{{ route('admin.circuitos.destroy',$circuito->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('admin.circuitos.show',$circuito->id) }}"><i class="fa fa-fw fa-eye"></i> Mostrar</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('admin.circuitos.edit',$circuito->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
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
                {!! $circuitos->links() !!}
            </div>
        </div>
    </div>
@endsection
