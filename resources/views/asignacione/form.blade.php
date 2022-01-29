<div class="box box-info padding-1">
    <div class="box-body">
        
       
        <div class="form-group">
            {{ Form::label('estudiante_id') }}
            {{ Form::select('estudiante_id',$estudiante ,$asignacione->estudiante_id, ['class' => 'form-control' . ($errors->has('estudiante_id') ? ' is-invalid' : ''), 'placeholder' => 'Estudiante Id']) }}
            {!! $errors->first('estudiante_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('materia_id') }}
            {{ Form::select('materia_id', $materia ,$asignacione->materia_id, ['class' => 'form-control' . ($errors->has('materia_id') ? ' is-invalid' : ''), 'placeholder' => 'Materia Id']) }}
            {!! $errors->first('materia_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
       
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>