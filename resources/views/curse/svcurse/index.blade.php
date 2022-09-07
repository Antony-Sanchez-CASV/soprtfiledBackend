@extends('layouts.app')

@section('template_title')
    Svcurse
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Svcurse') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('svcurses.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        <th>No</th>
                                        
										<th>Id Vcurse</th>
										<th>Id Schedule</th>
										<th>Quotaavalible</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($svcurses as $svcurse)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $svcurse->id_vCurse }}</td>
											<td>{{ $svcurse->id_schedule }}</td>
											<td>{{ $svcurse->quotaAvalible }}</td>

                                            <td>
                                                <form action="{{ route('svcurses.destroy',$svcurse->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('svcurses.show',$svcurse->id) }}"><i class="fa fa-fw fa-eye"></i> Mostrar mas información</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('svcurses.edit',$svcurse->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
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
                {!! $svcurses->links() !!}
            </div>
        </div>
    </div>
@endsection
