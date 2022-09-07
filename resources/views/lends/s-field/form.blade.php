<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('code_s_field') }}
            {{ Form::text('code_s_field', $sField->code_s_field, ['class' => 'form-control' . ($errors->has('code_s_field') ? ' is-invalid' : ''), 'placeholder' => 'Code S Field']) }}
            {!! $errors->first('code_s_field', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_activity') }}
            {{ Form::text('id_activity', $sField->id_activity, ['class' => 'form-control' . ($errors->has('id_activity') ? ' is-invalid' : ''), 'placeholder' => 'Id Activity']) }}
            {!! $errors->first('id_activity', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_sector') }}
            {{ Form::text('id_sector', $sField->id_sector, ['class' => 'form-control' . ($errors->has('id_sector') ? ' is-invalid' : ''), 'placeholder' => 'Id Sector']) }}
            {!! $errors->first('id_sector', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>