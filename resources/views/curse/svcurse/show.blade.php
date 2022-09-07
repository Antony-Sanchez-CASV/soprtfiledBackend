@extends('layouts.app')

@section('template_title')
    {{ $svcurse->name ?? 'Show Svcurse' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Svcurse</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('svcurses.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Vcurse:</strong>
                            {{ $svcurse->id_vCurse }}
                        </div>
                        <div class="form-group">
                            <strong>Id Schedule:</strong>
                            {{ $svcurse->id_schedule }}
                        </div>
                        <div class="form-group">
                            <strong>Quotaavalible:</strong>
                            {{ $svcurse->quotaAvalible }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
