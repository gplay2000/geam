@extends('layouts.app')

@section('template_title')
    Create Reporte
@endsection

@section('content')
    <section class="content container">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Ingresar Check In</span>
                    </div>
                    
                    <div class="card-body">
                        <form method="POST" action="{{ route('reportes.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('reporte.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
