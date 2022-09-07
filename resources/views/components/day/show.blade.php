@extends('layouts.app')

@section('template_title')
    {{ $day->name ?? 'Show Day' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Day</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('days.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $day->name }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
