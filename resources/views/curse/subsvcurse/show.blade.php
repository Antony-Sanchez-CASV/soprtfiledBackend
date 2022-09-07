@extends('layouts.app')

@section('template_title')
    {{ $subsvcurse->name ?? 'Show Subsvcurse' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Subsvcurse</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('subsvcurses.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Schedulevcurse:</strong>
                            {{ $subsvcurse->id_scheduleVCurse }}
                        </div>
                        <div class="form-group">
                            <strong>Id User:</strong>
                            {{ $subsvcurse->id_user }}
                        </div>
                        <div class="form-group">
                            <strong>Id State:</strong>
                            {{ $subsvcurse->id_state }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
