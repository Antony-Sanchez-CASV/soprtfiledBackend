@extends('layouts.app')

@section('template_title')
    {{ $hour->name ?? 'Show Hour' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Hour</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('hours.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Startt:</strong>
                            {{ $hour->startT }}
                        </div>
                        <div class="form-group">
                            <strong>Finisht:</strong>
                            {{ $hour->finishT }}
                        </div>
                        <div class="form-group">
                            <strong>Hours:</strong>
                            {{ $hour->hours }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
