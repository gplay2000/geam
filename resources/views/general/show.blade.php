@extends('layouts.app')

@section('template_title')
    {{ $general->name ?? 'Show General' }}
@endsection

@section('content')
    <section class="content container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Reporte General</span>
                        </div>
                        <br>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('generales.index') }}"> Atrás</a>
                        </div>
                        <br>
                       
                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id:</strong>
                            {{ $general->id_gen }}
                        </div>
                        <div class="form-group">
                            <strong>Origen:</strong>
                            {{ $general->fecha_reali }}
                        </div>
                        <div class="form-group">
                            <strong>PDF:</strong>
                            {{ $general->pdf }}
                        </div>
                        

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
