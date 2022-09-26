<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Nombre:') }}
            {{ Form::text('nombre', $archivo->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Archivo:') }}
            <br>
            {{ Form::file('file', $archivo->file, ['class' => 'form-control-file' . ($errors->has('file') ? ' is-invalid' : '')]) }}
            {!! $errors->first('file', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('user_id') }}
            {{ Form::text('user_id', $archivo->user_id, ['class' => 'form-control' . ($errors->has('user_id') ? ' is-invalid' : ''), 'placeholder' => 'User Id']) }}
            {!! $errors->first('user_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Actuación:') }}
            {{ Form::text('actuacion_id', $archivo->actuacion_id, ['class' => 'form-control' . ($errors->has('actuacion_id') ? ' is-invalid' : ''), 'placeholder' => 'Actuacion Id']) }}
            {!! $errors->first('actuacion_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>