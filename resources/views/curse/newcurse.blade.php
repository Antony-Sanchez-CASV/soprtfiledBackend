<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Launch demo modal
</button>
<div class="modal">
    <div class="modal-dailog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">
                    Nuevo Curso Vacacional
                </h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Envio de datos a la bd-->
                <form action="" method="post">
                    <div class="form-group">
                        <div>
                            <label for="inputName" class="form-label">Nombre del curso</label>
                            <input type="text" class="form-control" id="inputName">    
                        </div>
                        <div>
                            
                            {{ Form::label('description') }}
                            {{ Form::select('id_instructor', $instructors->id, $instructors->name, ['class'=>'form-control'. ($errors->has('id_instructor') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
                            {!! $errors->first('capacity', '<div class="invalid-feedback">:message</div>') !!}
                        <br>
                        <br>
                            <label for="id_instructor" class="form-label">Instructor</label>
                            <select name="Instructor" id="id_instructor" class="form-select">
                                @foreach ($instructors as $instructor)
                                    <option value="$instructor->id">{{$instructor->name +" "+ $instructor->latName}}</option>
                                @endforeach
                            </select>  
                        </div>
                        <div>
                            {{ Form::label('description') }}
                            {{ Form::text('description', $vcurse->description, ['class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
                            {!! $errors->first('description', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                            {{ Form::label('capacity') }}
                            {{ Form::text('capacity', $vcurse->capacity, ['class' => 'form-control' . ($errors->has('capacity') ? ' is-invalid' : ''), 'placeholder' => 'Capacidad']) }}
                            {!! $errors->first('capacity', '<div class="invalid-feedback">:message</div>') !!}
                        <div>
                            <button class="btn btn-primary"> Añadir Integrantes</button>
                        </div>
                    </div>
                    <button type="submit"  class="btn btn-primary">Guardar</button>
                </form>
            </div>
        </div>
    </div>
</div>