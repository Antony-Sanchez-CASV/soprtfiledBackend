<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_sField') }}
            {{ Form::text('id_sField', $ssfield->id_sField, ['class' => 'form-control' . ($errors->has('id_sField') ? ' is-invalid' : ''), 'placeholder' => 'Id Sfield']) }}
            {!! $errors->first('id_sField', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_schedule') }}
            {{ Form::text('id_schedule', $ssfield->id_schedule, ['class' => 'form-control' . ($errors->has('id_schedule') ? ' is-invalid' : ''), 'placeholder' => 'Id Schedule']) }}
            {!! $errors->first('id_schedule', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('avaliable') }}
            {{ Form::text('avaliable', $ssfield->avaliable, ['class' => 'form-control' . ($errors->has('avaliable') ? ' is-invalid' : ''), 'placeholder' => 'Avaliable']) }}
            {!! $errors->first('avaliable', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>