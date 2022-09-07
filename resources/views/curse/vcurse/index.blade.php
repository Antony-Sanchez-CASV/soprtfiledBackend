@extends('layouts.app', ['page' => __('CrearMoradores'), 'pageSlug' => 'einstructor'])

@section('template_title')
    Cursos Vacacionales
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Cursos Vacacionales') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('vcurses.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
										<th>Nombre del curso</th>
										<th>Decripción</th>
										<th>Capacidad</th>
										<th>Persona a cargo</th>
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
											<td>{{ $vcurse->getInstructor()}}</td>
											<td>{{ $vcurse->getLocated() }}</td>

                                            <td class="flex">
                                                <form action="{{ route('vcurses.destroy',$vcurse->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('vcurses.show',$vcurse->id) }}"><i class="fa fa-fw fa-eye"></i> Mostrar mas información</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('vcurses.edit',$vcurse->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
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
    </div>
@endsection
