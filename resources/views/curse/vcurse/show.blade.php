@extends('layouts.app', ['page' => __('CrearMoradores'), 'pageSlug' => 'einstructor'])


@section('template_title')
    {{ $vcurse->name ?? 'Show Vcurse' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Vcurse</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('vcurses.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $vcurse->name }}
                        </div>
                        <div class="form-group">
                            <strong>Description:</strong>
                            {{ $vcurse->description }}
                        </div>
                        <div class="form-group">
                            <strong>Capacity:</strong>
                            {{ $vcurse->capacity }}
                        </div>
                        <div class="form-group">
                            <strong>Id Instructor:</strong>
                            {{ $vcurse->getInstructor() }}
                        </div>
                        <div class="form-group">
                            <strong>Id Room:</strong>
                            {{ $vcurse->getLocated() }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
