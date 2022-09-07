<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_scheduleSField') }}
            {{ Form::text('id_scheduleSField', $lendsfiel->id_scheduleSField, ['class' => 'form-control' . ($errors->has('id_scheduleSField') ? ' is-invalid' : ''), 'placeholder' => 'Id Schedulesfield']) }}
            {!! $errors->first('id_scheduleSField', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_user') }}
            {{ Form::text('id_user', $lendsfiel->id_user, ['class' => 'form-control' . ($errors->has('id_user') ? ' is-invalid' : ''), 'placeholder' => 'Id User']) }}
            {!! $errors->first('id_user', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_state') }}
            {{ Form::text('id_state', $lendsfiel->id_state, ['class' => 'form-control' . ($errors->has('id_state') ? ' is-invalid' : ''), 'placeholder' => 'Id State']) }}
            {!! $errors->first('id_state', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('dateLend') }}
            {{ Form::text('dateLend', $lendsfiel->dateLend, ['class' => 'form-control' . ($errors->has('dateLend') ? ' is-invalid' : ''), 'placeholder' => 'Datelend']) }}
            {!! $errors->first('dateLend', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>