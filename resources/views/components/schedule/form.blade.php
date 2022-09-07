<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {!! Form::label('Dia ') !!}
            {{ Form::select('days', $days->pluck('name'),$schedule->id_name,['class' => 'form-control']) }}
        </div>
        <div class="form-group">
           {!! Form::label('Tiempo') !!}
           
           {!! Form::label('Hora de inicio') !!}
           {{ Form::select('hours', $hours1->pluck('startT'),$schedule->id_hour,['class' => 'form-control']) }}
           
        </div>
        <div class="form-group">
            
        </div>
        <div class="form-group">
       
        </div>
        <div class="form-group">
            
        </div>
        <div class="form-group">
            
        </div>
        <div class="form-group">
            
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>