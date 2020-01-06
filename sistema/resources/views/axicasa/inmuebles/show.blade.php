@extends('layouts.admin')
@section('header-content')
    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
        <div>
            <h2 class="text-white pb-2 fw-bold">Detalle del inmueble</h2>
            <h5 class="text-white op-7 mb-2">
                @if(session()->has('status_success'))
                    <i class="fas fa-check"></i> {!! session('status_success') !!}
                @endif
                @if(session()->has('status_warning'))
                    <i class="fas fa-check"></i> {!! session('status_warning') !!}
                @endif
            </h5>
        </div>
        <div class="ml-md-auto py-2 py-md-0" >
            <form action="{{asset('inmueble/cambiar-estatus/'.$inmueble->id)}}" method="post" style="display: flex; align-items: center; justify-content: space-between;">
                @csrf
                {{method_field('put')}}
                {!! Form::select('estatus', ['activo' => 'Activo', 'inactivo' => 'Inactivo','vendido'=>'Vendido'], $inmueble->estatus, ['class'=>'form-control']) !!}
                <button type="submit" class="btn btn-success btn-round">Actualizar</button>
            </form>
        </div>
    </div>
@stop
@section('content')
    <div class="page-inner mt--5">
        <div class="row mt--2">
            <div class="col-md-7">
                {!! Form::open(['url' => 'inmuebles/'.$inmueble->id,'method'=>'post']) !!}
                    {{method_field('put')}}
                    @include('axicasa.inmuebles.form-title')
                    @include('axicasa.inmuebles.form-feature')
                    @include('axicasa.inmuebles.form-ubicacion',['btn'=>'Actualizar'])
                {!! Form::close() !!}
            </div>
            <div class="col-md-5">
                <form action="{{asset('fotos/'.$inmueble->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card">
                        <div class="card-header" style="display: flex; align-items: center; justify-content: space-between;">
                            <h4 class="card-title">Imagenes</h4>
                            <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-upload"></i></button>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <input type="file" name="fotos[]" multiple  class="form-control">
                            </div>
                        </div>
                        <div class="card-body" style="height: 700px; overflow-y: scroll;">
                            <ul class="list-group">
                                @foreach($fotos as $foto)
                                    <li class="list-group-item">
                                        <img src="{{asset($foto->url_foto)}}" style="width: 100%; height: 300px;" alt="">
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
