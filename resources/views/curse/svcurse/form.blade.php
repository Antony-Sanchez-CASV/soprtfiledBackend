<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_vCurse') }}
            {{ Form::text('id_vCurse', $svcurse->id_vCurse, ['class' => 'form-control' . ($errors->has('id_vCurse') ? ' is-invalid' : ''), 'placeholder' => 'Id Vcurse']) }}
            {!! $errors->first('id_vCurse', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_schedule') }}
            {{ Form::text('id_schedule', $svcurse->id_schedule, ['class' => 'form-control' . ($errors->has('id_schedule') ? ' is-invalid' : ''), 'placeholder' => 'Id Schedule']) }}
            {!! $errors->first('id_schedule', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('quotaAvalible') }}
            {{ Form::text('quotaAvalible', $svcurse->quotaAvalible, ['class' => 'form-control' . ($errors->has('quotaAvalible') ? ' is-invalid' : ''), 'placeholder' => 'Quotaavalible']) }}
            {!! $errors->first('quotaAvalible', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>