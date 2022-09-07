@extends('layouts.app')

@section('template_title')
    Ssfield
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Ssfield') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('ssfields.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Id Sfield</th>
										<th>Id Schedule</th>
										<th>Avaliable</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($ssfields as $ssfield)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $ssfield->id_sField }}</td>
											<td>{{ $ssfield->id_schedule }}</td>
											<td>{{ $ssfield->avaliable }}</td>

                                            <td>
                                                <form action="{{ route('ssfields.destroy',$ssfield->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('ssfields.show',$ssfield->id) }}"><i class="fa fa-fw fa-eye"></i> Mostrar mas información</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('ssfields.edit',$ssfield->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
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
                {!! $ssfields->links() !!}
            </div>
        </div>
    </div>
@endsection
