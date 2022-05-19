@extends('layouts.vista')

@section('template_title')
    Reporte
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Reporte') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('reportes.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Realizar Reporte') }}
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
                                                                               
										<th>Id</th>
										<th>Nombre</th>
										<th>e-mail</th>
										
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                                                                        
											<td>{{ $user->id }}</td>
											<td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                                                                       
                                            <td>
                                                <form action="{{ route('admin.users.destroy',$user->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-success" href="{{ route('admin.users.edit',$user->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
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
                {!! $users->links() !!}
            </div>
        </div>
    </div>
@endsection
