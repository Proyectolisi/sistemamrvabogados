<div class="box box-info padding-1">
    <div class="box-body">
        
        {{ Form::hidden('user_id', auth()->user()->id) }}

        <div class="form-group">
            {{ Form::label('Municipio del despacho') }}
            {{ Form::select('municipio_id', $municipios ,$despacho->municipio_id, ['class' => 'form-control' . ($errors->has('municipio_id') ? ' is-invalid' : ''), 'placeholder' => 'Municipio']) }}
            {!! $errors->first('municipio_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nombre del Despacho') }}
            {{ Form::text('nombreDespacho', $despacho->nombreDespacho, ['class' => 'form-control' . ($errors->has('nombreDespacho') ? ' is-invalid' : ''), 'placeholder' => 'Nombre del Despacho']) }}
            {!! $errors->first('nombreDespacho', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Correo del Despacho') }}
            {{ Form::text('correoDespacho', $despacho->correoDespacho, ['class' => 'form-control' . ($errors->has('correoDespacho') ? ' is-invalid' : ''), 'placeholder' => 'Correo del Despacho']) }}
            {!! $errors->first('correoDespacho', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
    <a class="btn btn-secondary" href="{{ route('admin.despachos.index') }}"> Regresar</a>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>