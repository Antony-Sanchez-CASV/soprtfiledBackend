@extends('layouts.app')

@section('template_title')
    Update Ssfield
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Ssfield</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('ssfields.update', $ssfield->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('ssfield.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
