@extends('adminlte::page')  
@section('title', 'Inicio')    
@section('content')
<h1>entro</h1>
@section('content')
    
    <div class="container">
        <div id="calendar">
            
        </div>
    </div>
    
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#evento">
      Launch
    </button>
    
    <!-- Modal -->
    <div class="modal fade" id="evento" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Evento MRVAbogados</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                <div class="modal-body">
                    <form action="" method="post">

                        {!! csrf_field() !!}
                        
                        <div class="form-group">
                          <label for="id">id</label>
                          <input type="text" class="form-control" name="id" id="id" aria-describedby="helpId" placeholder="id del evento">
                        </div>

                        <div class="form-group">
                          <label for="title">Titulo</label>
                          <input type="text" class="form-control" name="title" id="title" aria-describedby="helpId" placeholder="Escribe el titulo del evento">
                        </div>

                        <div class="form-group">
                          <label for="description">Descripción</label>
                          <textarea class="form-control" name="description" id="description" rows="3"></textarea>
                        </div>

                        <div class="form-group">
                          <label for="start">Inicio</label>
                          <input type="datetime-local" class="form-control" name="start" id="start" aria-describedby="helpId" placeholder="Fecha de inicio del evento">
                        </div>

                        
                        <div class="form-group">
                          <label for="end">Fin</label>
                          <input type="datetime-local" class="form-control" name="end" id="end" aria-describedby="helpId" placeholder="Fecha final del evento">
                        </div>

                        <div class="form-group">
                          <label for="usuario_id">Usuario</label>
                            <select class="form-control" name="usuario_id" id="usuario_id">
                              <option>Seleccione el usuario</option>
                              <option value="1">Lietsel</option>
                              <option value="2">Silvia</option>
                              <option value="3">Jose</option>
                              <option value="4">Luisa</option>
                              <option value="5">Fernando</option>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-success" id="btnGuardar">Guardar</button>
                <button type="button" class="btn btn-warning" id="btnModificar">Modificar</button>
                <button type="button" class="btn btn-danger" id="btnEliminar">Eliminar</button>

                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    
                </div>
            </div>
        </div>
    </div>


    @endsection
    @section('js')
    <script src="{{ asset('js/calendar.js') }}" defer></script>
    @stop


    