@extends('layouts.admin')
@section('header-content')
    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
        <div>
            <h2 class="text-white pb-2 fw-bold">Registrar una nueva colonia</h2>
        </div>
        <div class="ml-md-auto py-2 py-md-0">
            <a href="{{asset('administrador/colonias/')}}" class="btn btn-success btn-round">Listado de colonias</a>
        </div>
    </div>
@stop
@section('content')
    <div class="page-inner mt--5">
        <div class="row mt--2">
            <div class="col-md-12">
                {!! Form::open(['url' => 'administrador/colonias','method'=>'post']) !!}
                <div class="card">
                    <div class="card-header"></div>
                    <div class="card-body">
                        @include('axicasa.admin.colonias.form')
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
