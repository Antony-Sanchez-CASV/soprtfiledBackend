@extends('layouts.app', ['page' => __('IndicePrestamos'), 'pageSlug' => 'ilends'])


@section('template_title')
    Prestamos
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <span id="card_title">
                                {{ __('Prestamos de canchas') }}
                            </span>                       
                        </div>
                        <div class="float-right">
                            <a href="{{ route('lendsfiels.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                              {{ __('Nuevo') }}
                            </a>
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

										<th>Usuario</th>

										<th>Cancha</th>
										<th>Horario</th>
										<th>Fecha de prestamo</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($lendsfiels as $lendsfiel)
                                        <tr>

											<td>{{ $lendsfiel->getName()}}</td>
											<td>{{ $lendsfiel->getSfield() }}</td>
											<td>{{ $lendsfiel->getSsfield() }}</td>
											<td>{{ $lendsfiel->dateLend }}</td>

                                            <td>
                                                
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $lendsfiels->links() !!}
            </div>
        </div>
    </div>
@endsection
