<div class="box box-info padding-1">
    <div class="box-body">
        
        {{ Form::hidden('user_id', auth()->user()->id) }}

        <div class="form-group">
            {{ Form::label('Nombre del Circuito') }}
            {{ Form::text('nombreCircuito', $circuito->nombreCircuito, ['class' => 'form-control' . ($errors->has('nombreCircuito') ? ' is-invalid' : ''), 'placeholder' => 'Nombre del circuito']) }}
            {!! $errors->first('nombreCircuito', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <a class="btn btn-secondary" href="{{ route('admin.circuitos.index') }}"> Regresar</a>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>