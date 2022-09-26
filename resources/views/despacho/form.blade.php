<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('municipio_id') }}
            {{ Form::text('municipio_id', $despacho->municipio_id, ['class' => 'form-control' . ($errors->has('municipio_id') ? ' is-invalid' : ''), 'placeholder' => 'Municipio Id']) }}
            {!! $errors->first('municipio_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombreDespacho') }}
            {{ Form::text('nombreDespacho', $despacho->nombreDespacho, ['class' => 'form-control' . ($errors->has('nombreDespacho') ? ' is-invalid' : ''), 'placeholder' => 'Nombredespacho']) }}
            {!! $errors->first('nombreDespacho', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('correoDespacho') }}
            {{ Form::text('correoDespacho', $despacho->correoDespacho, ['class' => 'form-control' . ($errors->has('correoDespacho') ? ' is-invalid' : ''), 'placeholder' => 'Correodespacho']) }}
            {!! $errors->first('correoDespacho', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('user_id') }}
            {{ Form::text('user_id', $despacho->user_id, ['class' => 'form-control' . ($errors->has('user_id') ? ' is-invalid' : ''), 'placeholder' => 'User Id']) }}
            {!! $errors->first('user_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>