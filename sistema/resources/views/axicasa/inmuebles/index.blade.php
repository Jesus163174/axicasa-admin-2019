@extends('layouts.admin')
@section('header-content')
    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
        <div>
            <h2 class="text-white pb-2 fw-bold"><i class="fas fa-map-marker-alt"></i> Listado de inmuebles</h2>
            <h5 class="text-white op-7 mb-2">
                @if(session()->has('status_success'))
                    <i class="fas fa-check"></i> {!! session('status_success') !!}
                @endif
            </h5>
        </div>
        <div class="ml-md-auto py-2 py-md-0">
            <a href="#" class="btn  btn-danger btn-round mr-2">Inactivos</a>
            <a href="{{asset('/inmuebles/create')}}" class="btn btn-success btn-round">Agregar nuevo</a>
        </div>
    </div>
@stop
@section('content')
    <div class="page-inner mt--5">
        <div class="row mt--2">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"></div>
                    <div class="card-body">
                        @include('axicasa.inmuebles.data')
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
