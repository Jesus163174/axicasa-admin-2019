@extends('layouts.admin')
@section('header-content')
    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
        <div>
            <h2 class="text-white pb-2 fw-bold">Actualizar datos del empleado</h2>
        </div>
        <div class="ml-md-auto py-2 py-md-0">
            <a href="{{asset('administrador/empleados/')}}" class="btn btn-success btn-round">Listado de empleados</a>
        </div>
    </div>
@stop
@section('content')
    <div class="page-inner mt--5">
        <div class="row mt--2">
            <div class="col-md-12">
                {!! Form::open(['url' => 'administrador/empleados/'.$user->id,'method'=>'post']) !!}
                {{method_field('put')}}
                <div class="card">
                    <div class="card-header"></div>
                    <div class="card-body">
                        @include('axicasa.admin.employees.form')
                    </div>
                    <div class="card-footer">
                        {!! Form::submit('Actualizar',['class'=>'btn btn-success']); !!}
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop
