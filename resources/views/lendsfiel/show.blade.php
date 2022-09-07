@extends('layouts.app')

@section('template_title')
    {{ $lendsfiel->name ?? 'Show Lendsfiel' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Lendsfiel</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('lendsfiels.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Schedulesfield:</strong>
                            {{ $lendsfiel->id_scheduleSField }}
                        </div>
                        <div class="form-group">
                            <strong>Id User:</strong>
                            {{ $lendsfiel->id_user }}
                        </div>
                        <div class="form-group">
                            <strong>Id State:</strong>
                            {{ $lendsfiel->id_state }}
                        </div>
                        <div class="form-group">
                            <strong>Datelend:</strong>
                            {{ $lendsfiel->dateLend }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
