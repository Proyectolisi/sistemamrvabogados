<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('circuito_id') }}
            {{ Form::text('circuito_id', $municipio->circuito_id, ['class' => 'form-control' . ($errors->has('circuito_id') ? ' is-invalid' : ''), 'placeholder' => 'Circuito Id']) }}
            {!! $errors->first('circuito_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombreMunicipio') }}
            {{ Form::text('nombreMunicipio', $municipio->nombreMunicipio, ['class' => 'form-control' . ($errors->has('nombreMunicipio') ? ' is-invalid' : ''), 'placeholder' => 'Nombremunicipio']) }}
            {!! $errors->first('nombreMunicipio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('user_id') }}
            {{ Form::text('user_id', $municipio->user_id, ['class' => 'form-control' . ($errors->has('user_id') ? ' is-invalid' : ''), 'placeholder' => 'User Id']) }}
            {!! $errors->first('user_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>