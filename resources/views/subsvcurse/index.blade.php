@extends('layouts.app')

@section('template_title')
    Subsvcurse
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Subsvcurse') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('subsvcurses.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
										<th>Id User</th>
										<th>Id State</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($subsvcurses as $subsvcurse)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $subsvcurse->id_vcurse }}</td>
											<td>{{ $subsvcurse->id_user }}</td>
											<td>{{ $subsvcurse->id_state }}</td>

                                            <td>
                                                <form action="{{ route('subsvcurses.destroy',$subsvcurse->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('subsvcurses.show',$subsvcurse->id) }}"><i class="fa fa-fw fa-eye"></i> Mostrar mas informaci??n</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('subsvcurses.edit',$subsvcurse->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
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
                {!! $subsvcurses->links() !!}
            </div>
        </div>
    </div>
@endsection
