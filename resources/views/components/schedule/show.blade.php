@extends('layouts.app')

@section('template_title')
    {{ $schedule->name ?? 'Show Schedule' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Schedule</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('schedules.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Hour:</strong>
                            {{ $schedule->id_hour }}
                        </div>
                        <div class="form-group">
                            <strong>Id Day:</strong>
                            {{ $schedule->id_day }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
