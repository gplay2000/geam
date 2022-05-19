@extends('layouts.vista')

@section('template_title')
    General
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Generales') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('generales.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Nueva General +') }}
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
										<th>Fecha de Realizacion</th>
										<th>pdf</th>
										                                     
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($generales as $general)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $general->id_gen }}</td>
											<td>{{ $general->fecha_reali }}</td>
											<td>{{ $general->pdf }}</td>
											                                          
                                            <td>
                                                <form action="{{ route('generales.destroy',$general->id_gen) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('generales.show',$general->id_gen) }}"><i class="fa fa-fw fa-eye"></i> Mostrar</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('generales.edit',$general->id_gen) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
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
                {!! $generales->links() !!}
            </div>
        </div>
    </div>
@endsection
