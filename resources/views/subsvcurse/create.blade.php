@extends('layouts.app')

@section('template_title')
    Create Subsvcurse
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Inscribir en un curso</span>
                    </div>
                    <div class="card-body">
                        <div class="row row-cols-2 row-cols-md-4 g-2">
                            @foreach ($vcurses as $vcurse)
                            <div class="col">
                                <div class="card">
                                    <div class="card-head">
                                        <strong class="card-title">
                                            {{$vcurse->name}}
                                        </strong>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            {{$vcurse->description }}
                                        </div>
                                        
                                    </div>
                                    <div class="card-footer">
                                        
                                        
                                        <div class="flex">
                                            <small>
                                                Capacidad: 
                                                {{$vcurse->capacity }}
                                            </small>
                                            <form action="">
                                                <button class="btn btn-danger btn-sm"> Seleccionar</button>
                                            </form>
                                        </div>
    
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <form method="POST" action="{{ route('subsvcurses.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('subsvcurse.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
