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
                        <span class="card-title">Create Subsvcurse</span>
                    </div>
                    <div class="card-body">
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
