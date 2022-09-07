@extends('layouts.app')

@section('template_title')
    {{ $ssfield->name ?? 'Show Ssfield' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Ssfield</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('ssfields.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Sfield:</strong>
                            {{ $ssfield->id_sField }}
                        </div>
                        <div class="form-group">
                            <strong>Id Schedule:</strong>
                            {{ $ssfield->id_schedule }}
                        </div>
                        <div class="form-group">
                            <strong>Avaliable:</strong>
                            {{ $ssfield->avaliable }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
