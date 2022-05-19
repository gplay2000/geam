@extends('layouts.app')

@section('template_title')
    Update General
@endsection

@section('content')
    <section class="content container">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update General</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('generales.update', $general->id_ges) }}"  role="form" enctype="multipart/form-data">
                            <br>
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('general.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
