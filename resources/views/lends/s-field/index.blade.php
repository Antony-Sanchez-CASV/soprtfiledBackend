@extends('layouts.app')

@section('template_title')
    S Field
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('S Field') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('s-fields.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Codigo</th>
										<th>Actividad</th>
										<th>Sector</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($sFields as $sField)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $sField->code_s_field }}</td>
											<td>{{ $sField->id_activity }}</td>
											<td>{{ $sField->id_sector }}</td>

                                            <td>
                                                <form action="{{ route('s-fields.destroy',$sField->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('s-fields.show',$sField->id) }}"><i class="fa fa-fw fa-eye"></i> Mostrar mas información</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('s-fields.edit',$sField->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
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
                {!! $sFields->links() !!}
            </div>
        </div>
    </div>
@endsection
