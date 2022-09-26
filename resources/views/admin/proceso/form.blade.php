<div class="box box-info padding-1">
    <div class="box-body">

        {{ Form::hidden('user_id', auth()->user()->id) }}

        <div class="form-group">
            {{ Form::label('Numero de Radicado') }}
            {{ Form::text('numero_radicado', $proceso->numero_radicado, ['class' => 'form-control' . ($errors->has('numero_radicado') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese el número de radicado']) }}
            {!! $errors->first('numero_radicado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_radicado') }}
            {{ Form::datetime('fecha_radicado', $proceso->fecha_radicado, ['class' => 'form-control' . ($errors->has('fecha_radicado') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Radicado']) }}
            {!! $errors->first('fecha_radicado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Jurisdiccion') }}
            {{ Form::select('jurisdiccion_id', $jurisdicciones ,$proceso->jurisdiccion_id, ['class' => 'form-control' . ($errors->has('jurisdiccion_id') ? ' is-invalid' : ''), 'placeholder' => 'Jurisdiccion']) }}
            {!! $errors->first('jurisdiccion_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Estado proceso') }}
            {{ Form::select('estado_proceso_id', $estadoprocesos, $proceso->estado_proceso_id, ['class' => 'form-control' . ($errors->has('estado_proceso_id') ? ' is-invalid' : ''), 'placeholder' => 'Estado Proceso']) }}
            {!! $errors->first('estado_proceso_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Tipo proceso') }}
            {{ Form::select('tipo_proceso_id', $tipoprocesos, $proceso->tipo_proceso_id, ['class' => 'form-control' . ($errors->has('tipo_proceso_id') ? ' is-invalid' : ''), 'placeholder' => 'Tipo Proceso']) }}
            {!! $errors->first('tipo_proceso_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Etapa procesal') }}
            {{ Form::select('etapa_procesal_id', $etapasprocesal ,$proceso->etapa_procesal_id, ['class' => 'form-control' . ($errors->has('etapa_procesal_id') ? ' is-invalid' : ''), 'placeholder' => 'Etapa Procesal']) }}
            {!! $errors->first('etapa_procesal_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Juzgado') }}
            {{ Form::select('despacho_id', $despachos, $proceso->despacho_id, ['class' => 'form-control' . ($errors->has('despacho_id') ? ' is-invalid' : ''), 'placeholder' => 'Despacho']) }}
            {!! $errors->first('despacho_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Demandado') }}
            {{ Form::text('demandado', $proceso->demandado, ['class' => 'form-control' . ($errors->has('demandado') ? ' is-invalid' : ''), 'placeholder' => 'Demandado']) }}
            {!! $errors->first('demandado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Demandante') }}
            {{ Form::text('demandante', $proceso->demandante, ['class' => 'form-control' . ($errors->has('demandante') ? ' is-invalid' : ''), 'placeholder' => 'Demandante']) }}
            {!! $errors->first('demandante', '<div class="invalid-feedback">:message</div>') !!}
        </div>
            
        <div class="form-group">
            {{ Form::label('Descripcion') }}
            {{ Form::textarea('descripcion', $proceso->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
    <a class="btn btn-secondary" href="{{ route('admin.procesos.index') }}"> Regresar</a>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>

@section('js')
<script src="https://cdn.ckeditor.com/ckeditor5/35.1.0/classic/ckeditor.js"></script>

<script>
    ClassicEditor
        .create( document.querySelector( '#descriptions' ) )
        .catch( error => {
            console.error( error );
        } );
</script>

@endsection