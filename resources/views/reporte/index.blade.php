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
										<th>Puesto</th>
										<th>Nombre del Estudiante</th>
										<th>Puntaje Final</th>
                                        <th>Puntaje Ingles</th>
                                        <th>Puntaje L.Critica</th>
                                        <th>Puntaje Matematica</th>
                                        <th>Puntaje Sociales</th>
                                        <th>Puntaje Naturales</th>
                                        <th>Institucion</th>
                                        <th>Grado</th>
                                        <th></th>
                                       

                            
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($reportes as $reporte)
                                        <tr>
                                                                                       
											<td>{{ $reporte->id }}</td>
											<td>{{ $reporte->puesto }}</td>
											<td>{{ $reporte->nombre_est }}</td>
											<td>{{ $reporte->total_p }}</td>
                                            <td>{{ $reporte->ingles_p }}</td>
                                            <td>{{ $reporte->lect_p }}</td>
                                            <td>{{ $reporte->mate_p }}</td>
                                            <td>{{ $reporte->soci_p }}</td>
                                            <td>{{ $reporte->nat_p }}</td>
                                            <td>{{ $reporte->id_instituciones}}</td>
                                            <td>{{ $reporte->grado }}</td>
                                            
                                                                                       
                                            <td>
                                                <form action="{{ route('reportes.destroy',$reporte->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-success" href="{{ route('reportes.edit',$reporte->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
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
                {!! $reportes->links() !!}
            </div>
        </div>
    </div>
@endsection
