@extends('layouts.app')

@section('template_title')
    {{ $sField->name ?? 'Show S Field' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show S Field</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('s-fields.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Code S Field:</strong>
                            {{ $sField->code_s_field }}
                        </div>
                        <div class="form-group">
                            <strong>Id Activity:</strong>
                            {{ $sField->id_activity }}
                        </div>
                        <div class="form-group">
                            <strong>Id Sector:</strong>
                            {{ $sField->id_sector }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
