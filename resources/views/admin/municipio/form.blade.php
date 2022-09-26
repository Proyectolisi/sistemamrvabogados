<div class="box box-info padding-1">
    <div class="box-body">

        {{ Form::hidden('user_id', auth()->user()->id) }}
        
        <div class="form-group">
            {{ Form::label('Nombre del Circuito') }}
            {{ Form::select('circuito_id',$circuitos, $municipio->circuito_id, ['class' => 'form-control' . ($errors->has('circuito_id') ? ' is-invalid' : ''), 'placeholder' => 'Nombre del circuito']) }}
            {!! $errors->first('circuito_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nombre del Municipio') }}
            {{ Form::text('nombreMunicipio', $municipio->nombreMunicipio, ['class' => 'form-control' . ($errors->has('nombreMunicipio') ? ' is-invalid' : ''), 'placeholder' => 'Nombre del Municipio']) }}
            {!! $errors->first('nombreMunicipio', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
    <a class="btn btn-secondary" href="{{ route('admin.municipios.index') }}"> Regresar</a>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>