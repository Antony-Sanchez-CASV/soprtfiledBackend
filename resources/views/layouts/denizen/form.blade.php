<div class="box box-info padding-1">
    <div class="box-body">
        
        
        <div class="form-group">
            {{ Form::label('firstName') }}
            {{ Form::text('firstName', $user->firstName, ['class' => 'form-control' . ($errors->has('firstName') ? ' is-invalid' : ''), 'placeholder' => 'Firstname']) }}
            {!! $errors->first('firstName', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('lastName') }}
            {{ Form::text('lastName', $user->lastName, ['class' => 'form-control' . ($errors->has('lastName') ? ' is-invalid' : ''), 'placeholder' => 'Lastname']) }}
            {!! $errors->first('lastName', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('email') }}
            {{ Form::text('email', $user->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
            {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nickname') }}
            {{ Form::text('nickname', $user->nickname, ['class' => 'form-control' . ($errors->has('nickname') ? ' is-invalid' : ''), 'placeholder' => 'Nickname']) }}
            {!! $errors->first('nickname', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('batch') }}
            {{ Form::text('batch', $user->batch, ['class' => 'form-control' . ($errors->has('batch') ? ' is-invalid' : ''), 'placeholder' => 'Batch']) }}
            {!! $errors->first('batch', '<div class="invalid-feedback">:message</div>') !!}
        </div>
 

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>