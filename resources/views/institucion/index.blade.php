@extends('layouts.app')

@section('template_title')
    Instituciones
    @endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Instituciones') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('instituciones.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Nuevo Institucion +') }}
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
                                        
										<th>Id</th>
										<th>Nombre Institucion</th>
										<th>Departamento</th>
                                        <th>Ciudad</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($instituciones as $institucion)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $institucion->id_ins }}</td>
											<td>{{ $institucion->nombre_ins }}</td>
											<td>{{ $institucion->departamento }}</td>
                                            <td>{{ $institucion->ciudad }}</td>

                                            <td>
                                                <form action="{{ route('instituciones.destroy',$institucion->id_ins) }}" method="POST">
                                                    <a class="btn btn-sm btn-success" href="{{ route('instituciones.edit',$institucion->id_ins) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
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
                {!! $instituciones->links() !!}
            </div>
        </div>
    </div>
@endsection
