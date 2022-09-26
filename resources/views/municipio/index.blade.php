@extends('layouts.main', ['activePage' => 'municipios', 'titlePage' => __('Municipios')])

@section('template_title')
    Municipio
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
                                        
										<th>Circuito</th>
										<th>Nombre del Municipio</th>
										

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($municipios as $municipio)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $municipio->circuito->nombreCircuito }}</td>
											<td>{{ $municipio->nombreMunicipio }}</td>
											

                                            <td>                                                
                                                    <a class="btn btn-sm btn-primary " href="{{ route('municipios.show',$municipio->id) }}"><i class="fa fa-fw fa-eye"></i> Mostrar</a>
                                                    
                                                    @csrf                                                    
                                                    
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
