@extends('layouts.app', ['page' => __('CrearMoradores'), 'pageSlug' => 'einstructor'])


@section('template_title')
    Modificar
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Modificar</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('instructors.update', $instructor->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('instructor.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
