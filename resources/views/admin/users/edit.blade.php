@extends('layouts.vista')

@section('template_title')
    Update Reporte
@endsection

@section('content')
@if (session('info'))
<div class = "alert alert-success">
    <strong>{{session('info')}}</strong>
@endif
    <div class="card" >
        <div class="card-body">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <h2 class="card-title" class ="h2">Asignar Rol</h2>
                    </div>
                    
                        <div class="card-body">

                                <h3>Nombre</h3>
                                <p class="form control">{{$user->name}}</p>
                                <br>
                                <h3>Lista de Roles</h3>
                                   {{ Form::model($user,['route' => ['admin.users.update', $user], 'method' => 'PUT']) }}
                                    @foreach ($roles as $role)
                                <div>
                                    <label>
                                      {{ Form::checkbox('roles[]', $role->id, null, ['class' => 'mr-1'])}}
                                       {{$role -> name}}
                                    </label>
                                </div> 
                                 @endforeach
                                    <div class="box-footer mt20">
                                      <button type="submit" class="btn btn-primary">Confirmar</button>
                                    </div> 
                                 {!! Form::close()!!}
                            
                        </div>   
                </div>             
            </div>                 
        </div>
        
        <br>

</div>
    
@endsection