<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_scheduleVCurse') }}
            {{ Form::text('id_scheduleVCurse', $subsvcurse->id_scheduleVCurse, ['class' => 'form-control' . ($errors->has('id_scheduleVCurse') ? ' is-invalid' : ''), 'placeholder' => 'Id Schedulevcurse']) }}
            {!! $errors->first('id_scheduleVCurse', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_user') }}
            {{ Form::text('id_user', $subsvcurse->id_user, ['class' => 'form-control' . ($errors->has('id_user') ? ' is-invalid' : ''), 'placeholder' => 'Id User']) }}
            {!! $errors->first('id_user', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_state') }}
            {{ Form::text('id_state', $subsvcurse->id_state, ['class' => 'form-control' . ($errors->has('id_state') ? ' is-invalid' : ''), 'placeholder' => 'Id State']) }}
            {!! $errors->first('id_state', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>