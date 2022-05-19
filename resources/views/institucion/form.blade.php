<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id') }}
            {{ Form::text('id_ins', $institucion->id_ins, ['class' => 'form-control' . ($errors->has('id_ins') ? ' is-invalid' : ''), 'placeholder' => 'Id']) }}
            {!! $errors->first('id_ins', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nombre Institucion') }}
            {{ Form::text('nombre_ins', $institucion->nombre_ins, ['class' => 'form-control' . ($errors->has('nombre_ins') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Institucion']) }}
            {!! $errors->first('nombre_ins', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Departamento') }}
            {{ Form::text('departamento', $institucion->departamento, ['class' => 'form-control' . ($errors->has('departamento') ? ' is-invalid' : ''), 'placeholder' => 'departamento']) }}
            {!! $errors->first('departamento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Ciudad') }}
            {{ Form::text('ciudad', $institucion->ciudad, ['class' => 'form-control' . ($errors->has('ciudad') ? ' is-invalid' : ''), 'placeholder' => 'Ciudad']) }}
            {!! $errors->first('ciudad', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <br>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>