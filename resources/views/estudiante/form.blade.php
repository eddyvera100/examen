<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('numeroId') }}
            {{ Form::text('numeroId', $estudiante->numeroId, ['class' => 'form-control' . ($errors->has('numeroId') ? ' is-invalid' : ''), 'placeholder' => 'Numeroid']) }}
            {!! $errors->first('numeroId', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('paterno') }}
            {{ Form::text('paterno', $estudiante->paterno, ['class' => 'form-control' . ($errors->has('paterno') ? ' is-invalid' : ''), 'placeholder' => 'Paterno']) }}
            {!! $errors->first('paterno', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('materno') }}
            {{ Form::text('materno', $estudiante->materno, ['class' => 'form-control' . ($errors->has('materno') ? ' is-invalid' : ''), 'placeholder' => 'Materno']) }}
            {!! $errors->first('materno', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombres') }}
            {{ Form::text('nombres', $estudiante->nombres, ['class' => 'form-control' . ($errors->has('nombres') ? ' is-invalid' : ''), 'placeholder' => 'Nombres']) }}
            {!! $errors->first('nombres', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fechaNac') }}
            {{ Form::text('fechaNac', $estudiante->fechaNac, ['class' => 'form-control' . ($errors->has('fechaNac') ? ' is-invalid' : ''), 'placeholder' => 'Fechanac']) }}
            {!! $errors->first('fechaNac', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>