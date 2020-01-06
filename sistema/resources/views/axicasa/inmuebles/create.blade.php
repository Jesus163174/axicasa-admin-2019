@extends('layouts.admin')
@section('header-content')
    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
        <div>
            <h2 class="text-white pb-2 fw-bold">Agregar nuevo inmueble</h2>
            <h5 class="text-white op-7 mb-2">mensje</h5>
        </div>
        <div class="ml-md-auto py-2 py-md-0">
            <a href="{{asset('inmuebles')}}" class="btn btn-success btn-round">Listado de estados</a>
        </div>
    </div>
@stop
@section('content')
    <div class="page-inner mt--5">
        <div class="row mt--2">
            <div class="col-md-12">
                {!! Form::open(['url' => 'inmuebles','method'=>'post']) !!}
                    @include('axicasa.inmuebles.form-title')
                    @include('axicasa.inmuebles.form-feature')
                    @include('axicasa.inmuebles.form-ubicacion',['btn'=>'Registrar'])
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop
