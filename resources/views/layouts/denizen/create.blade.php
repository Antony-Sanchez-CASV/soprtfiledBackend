@extends('layouts.app', ['page' => __('CrearMoradores'), 'pageSlug' => 'cdenizens'])


@section('template_title')
    Crear moradores
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Nuevo Morador</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('users.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('layouts.denizen.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
