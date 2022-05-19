<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id') }}
            {{ Form::text('id_res', $general->id_gen, ['class' => 'form-control' . ($errors->has('_res') ? ' is-invalid' : ''), 'placeholder' => 'Id']) }}
            {!! $errors->first('id_res', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha de Realizacion') }}
            {{ Form::text('fecha_reali', $general->fecha_reali, ['class' => 'form-control' . ($errors->has('fecha_reali') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('fecha_reali', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('PDF') }}
            {{ Form::text('pdf', $general->pdf, ['class' => 'form-control' . ($errors->has('pdf') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('pdf', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <BR>
       
        </ul>

    </div>
    <br>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>