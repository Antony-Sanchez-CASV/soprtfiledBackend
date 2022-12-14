@extends('layouts.app', ['page' => __('CrearMoradores'), 'pageSlug' => 'cinstructor'])


@section('template_title')
    Nuevo Instructor
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Nuevo Instructor</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('instructors.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('layouts.instructor.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
