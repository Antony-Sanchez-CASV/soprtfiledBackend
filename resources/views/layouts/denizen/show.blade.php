@extends('layouts.app', ['page' => __('InfoMoradores'), 'pageSlug' => 'sdenizens'])


@section('template_title')
    {{ $user->firstName ?? ' informacion' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Información</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('users.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Rol:</strong>
                            {{ $user->id_rol }}
                        </div>
                        <div class="form-group">
                            <strong>Firstname:</strong>
                            {{ $user->firstName }}
                        </div>
                        <div class="form-group">
                            <strong>Lastname:</strong>
                            {{ $user->lastName }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $user->email }}
                        </div>
                        <div class="form-group">
                            <strong>Nickname:</strong>
                            {{ $user->nickname }}
                        </div>
                        <div class="form-group">
                            <strong>Batch:</strong>
                            {{ $user->batch }}
                        </div>
                        <div class="form-group">
                            <strong>State:</strong>
                            {{ $user->state }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
