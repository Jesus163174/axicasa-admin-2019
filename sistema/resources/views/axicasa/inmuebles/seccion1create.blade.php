@extends('layouts.admin')
@section('header-content')
    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
        <div>
            <h2 class="text-white pb-2 fw-bold">Agregar nuevo inmueble</h2>
            <h5 class="text-white op-7 mb-2">Pasos 1/4</h5>
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
                {!! Form::open(['url' => 'inmuebles/seccion-1','method'=>'post']) !!}
                <div class="card">
                    <div class="card-header"></div>
                    <div class="card-body">
                        @include('axicasa.inmuebles.seccion1form')
                    </div>
                    <div class="card-footer">
                        {!! Form::submit('Registrar',['class'=>'btn btn-success']); !!}
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop
