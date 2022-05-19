@extends('layouts.app')

@section('content')

<div class="container">

        <div class="row">
            <div class="col-md-12">
                <div class="page-header">
                    
                    <h1>
                        Busqueda de usuarios
                        {{ Form::open(['route' => 'home', 'method' => 'GET', 'class' => 'form-inline pull-right']) }}
                            <div class="form-group">
                                {{ Form::text('nombre_est', null, ['class' => 'form-control', 'placeholder' => 'Nombre']) }}
                            </div>
                            
                            <div class="form-group">
                                <button type="submit" class="btn btn-default">
                                    <span class="glyphicon glyphicon-search"></span>
                                </button>
                            </div>
                        {{ Form::close() }}
                    </h1>
                   
                </div>

            </div>
        </div>
    </div>
@endsection
