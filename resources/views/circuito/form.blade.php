<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombreCircuito') }}
            {{ Form::text('nombreCircuito', $circuito->nombreCircuito, ['class' => 'form-control' . ($errors->has('nombreCircuito') ? ' is-invalid' : ''), 'placeholder' => 'Nombrecircuito']) }}
            {!! $errors->first('nombreCircuito', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('user_id') }}
            {{ Form::text('user_id', $circuito->user_id, ['class' => 'form-control' . ($errors->has('user_id') ? ' is-invalid' : ''), 'placeholder' => 'User Id']) }}
            {!! $errors->first('user_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>