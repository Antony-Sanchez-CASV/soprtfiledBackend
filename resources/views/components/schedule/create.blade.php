@extends('layouts.app')

@section('template_title')
    Create Schedule
@endsection

@section('content')
    <section class="content container-fluid">
        <table>
            @foreach ($days as $day)
                <td>{{$day->id}}</td>
            @endforeach
        </table>
       
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Crear horario</span>
                    </div>
                    <div>
                        
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('schedules.store') }}"  role="form" enctype="multipart/form-data">
                            <div class="box box-info padding-1">
                                <div class="box-body">
                                    @csrf

                                    @include('components.schedule.form')
                                       
                            
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
