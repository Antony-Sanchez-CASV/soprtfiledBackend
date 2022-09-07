<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('startT') }}
            {{ Form::text('startT', $hour->startT, ['class' => 'form-control' . ($errors->has('startT') ? ' is-invalid' : ''), 'placeholder' => 'Startt']) }}
            {!! $errors->first('startT', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('finishT') }}
            {{ Form::text('finishT', $hour->finishT, ['class' => 'form-control' . ($errors->has('finishT') ? ' is-invalid' : ''), 'placeholder' => 'Finisht']) }}
            {!! $errors->first('finishT', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('hours') }}
            {{ Form::text('hours', $hour->hours, ['class' => 'form-control' . ($errors->has('hours') ? ' is-invalid' : ''), 'placeholder' => 'Hours']) }}
            {!! $errors->first('hours', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>