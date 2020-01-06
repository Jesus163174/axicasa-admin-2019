{!! Form::open(['url' => 'administrador/municipios/'.$municipio->id,'method'=>'post','class'=>'n-form-line']) !!}
    {{method_field('delete')}}
    {!! Form::submit('Eliminar',['class'=>'btn btn-danger btn-xs']); !!}
{!! Form::close() !!}<?php
