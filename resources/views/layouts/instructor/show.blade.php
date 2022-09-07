@extends('layouts.app', ['page' => __('instructor'), 'pageSlug' => 'sinstructor'])


@section('template_title')
    {{ $instructor->name ?? 'información' }}
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
                            <a class="btn btn-primary" href="{{ route('instructors.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $instructor->name   }} {{$instructor->latName}}
                        </div>
                        <div class="form-group">
                            <strong>Grado de educación:</strong>
                            {{ $instructor->collegeDegree }}
                        </div>
                        <div class="form-group">
                            <strong>Salario:</strong>
                            {{ $instructor->salary }}
                        </div>
                        <div class="form-group">
                            <strong>Address:</strong>
                            {{ $instructor->address }}
                        </div>
                        <div class="card">
                            <div class="card-head">
                                <strong class="card-title">
                                    Contacto
                                </strong>
                            </div>
                            <div class="card body">
                                <div class="form-group">
                                    <strong>Cellphone:</strong>
                                    {{ $instructor->cellphone }}
                                </div>
                                <div class="form-group">
                                    <strong>Email:</strong>
                                    {{ $instructor->email }}
                                </div>
                            </div>
                        </div>
                        

                    </div>
                </div>
                <div class="card">
                    <div class="card-head">
                        <strong class="card-title">
                            Cursos que administra
                        </strong>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
										<th>Nombre del curso</th>
										<th>Decripción</th>
										<th>Capacidad</th>
										<th>Ubicación</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($vcurses as $vcurse)
                                        <tr>
											<td>{{ $vcurse->name }}</td>
											<td>{{ $vcurse->description }}</td>
											<td>{{ $vcurse->capacity }}</td>
											<td>{{ $vcurse->getLocated() }}</td>

                                            <td class="flex">
                                                <form action="{{ route('vcurses.destroy',$vcurse->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('vcurses.show',$vcurse->id) }}"><i class="fa fa-fw fa-eye"></i> Mostrar mas información</a>

                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
