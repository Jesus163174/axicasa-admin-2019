@extends('layouts.admin')
@section('header-content')
    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
        <div>
            <h2 class="text-white pb-2 fw-bold"><i class="fas fa-map-marker-alt"></i> Listado de empleados</h2>
            <h5 class="text-white op-7 mb-2">
                @if(session()->has('status_success'))
                    <i class="fas fa-check"></i> {!! session('status_success') !!}
                @endif
            </h5>
        </div>
        <div class="ml-md-auto py-2 py-md-0">
            <a href="#" class="btn btn-danger btn-round mr-2">Eliminados</a>
            <a href="{{asset('administrador/empleados/create')}}" class="btn btn-success btn-round">Agregar nuevo</a>
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
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Email</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>
                                            <a href="{{asset('administrador/empleados/'.$user->id.'/edit')}}" class="btn btn-success btn-xs">Actualizar</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
