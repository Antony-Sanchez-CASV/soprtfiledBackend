
@section('content')
<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('name') }}
            {{ Form::text('name', $vcurse->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('description') }}
            {{ Form::text('description', $vcurse->description, ['class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''), 'placeholder' => 'Description']) }}
            {!! $errors->first('description', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('capacity') }}
            {{ Form::text('capacity', $vcurse->capacity, ['class' => 'form-control' . ($errors->has('capacity') ? ' is-invalid' : ''), 'placeholder' => 'Capacity']) }}
            {!! $errors->first('capacity', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_instructor') }}
            {{ Form::text('id_instructor', $vcurse->id_instructor, ['class' => 'form-control' . ($errors->has('id_instructor') ? ' is-invalid' : ''), 'placeholder' => 'Id Instructor']) }}
            {!! $errors->first('id_instructor', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_room') }}
            {{ Form::text('id_room', $vcurse->id_room, ['class' => 'form-control' . ($errors->has('id_room') ? ' is-invalid' : ''), 'placeholder' => 'Id Room']) }}
            {!! $errors->first('id_room', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
@endsection