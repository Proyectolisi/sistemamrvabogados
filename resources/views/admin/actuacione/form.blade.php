<div class="box box-info padding-1">
    <div class="box-body">

            {{ Form::hidden('user_id', auth()->user()->id) }}
        
            <div class="form-group">
            {{ Form::label('Fecha de la Actuación:') }}
            {{ Form::date('fecha_actuacion', $actuacione->fecha_actuacion, ['class' => 'form-control' . ($errors->has('fecha_actuacion') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Actuacion']) }}
            {!! $errors->first('fecha_actuacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Tipo de Actuación:') }}
            {{ Form::select('tipo_actuacion_id', $tipoactuaciones , $actuacione->tipo_actuacion_id, ['class' => 'form-control' . ($errors->has('tipo_actuacion_id') ? ' is-invalid' : ''), 'placeholder' => 'Tipo Actuacion Id']) }}
            {!! $errors->first('tipo_actuacion_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Proceso de la Actuación:') }}
            {{ Form::select('proceso_id', $procesos ,$actuacione->proceso_id, ['class' => 'form-control' . ($errors->has('proceso_id') ? ' is-invalid' : ''), 'placeholder' => 'Proceso Id']) }}
            {!! $errors->first('proceso_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Anotaciones:') }}
            {{ Form::textarea('anotacion', $actuacione->anotacion, ['class' => 'form-control' . ($errors->has('anotacion') ? ' is-invalid' : ''), 'placeholder' => 'Anotacion']) }}
            {!! $errors->first('anotacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha Inicio del Termino:') }}
            {{ Form::date('fecha_inicio_termino', $actuacione->fecha_inicio_termino, ['class' => 'form-control' . ($errors->has('fecha_inicio_termino') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Inicio Termino']) }}
            {!! $errors->first('fecha_inicio_termino', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha Finalización del Termino:') }}
            {{ Form::date('fecha_finaliza_termino', $actuacione->fecha_finaliza_termino, ['class' => 'form-control' . ($errors->has('fecha_finaliza_termino') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Finaliza Termino']) }}
            {!! $errors->first('fecha_finaliza_termino', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha de Registro:') }}
            {{ Form::date('fecha_registro', $actuacione->fecha_registro, ['class' => 'form-control' . ($errors->has('fecha_registro') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Registro']) }}
            {!! $errors->first('fecha_registro', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Archivo:') }}
            {{ Form::file('file', $actuacione->file, ['class' => 'form-control' . ($errors->has('file') ? ' is-invalid' : ''), 'placeholder' => 'File']) }}
            {!! $errors->first('file', '<div class="invalid-feedback">:message</div>') !!}
        </div>
 

    </div>
    <div class="box-footer mt20">
        <a class="btn btn-secondary" href="{{ route('admin.actuaciones.index') }}"> Regresar</a>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>