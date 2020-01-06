<div class="form-group">
    {!! Form::label('nombre', 'Nombre de la colonia'); !!}
    {!! Form::text('nombre', $colonia->nombre,['class'=>'form-control']); !!}
    {!! $errors->first('nombre','<span class="error-input">:message</span>') !!}
</div>
<div class="form-group">
    {!! Form::label('municipio_id', 'Municipio'); !!}
    {!! Form::select('municipio_id', $municipios,$colonia->municipio_id, ['class' => 'form-control','placeholder'=>"Selecciona un estado"]) !!}
    {!! $errors->first('municipio_id','<span class="error-input">:message</span>') !!}
</div>
@if($colonia->municipio)
    <div class="form-group">
        {!! Form::label('estado_id', 'Estado'); !!}
        {!! Form::select('estado_id', $estados,$colonia->municipio->estado_id, ['class' => 'form-control','placeholder'=>"Selecciona un estado"]) !!}
        {!! $errors->first('estado_id','<span class="error-input">:message</span>') !!}
    </div>
@else
    <div class="form-group">
        {!! Form::label('estado_id', 'Estado'); !!}
        {!! Form::select('estado_id', $estados,null, ['class' => 'form-control','placeholder'=>"Selecciona un estado"]) !!}
        {!! $errors->first('estado_id','<span class="error-input">:message</span>') !!}
    </div>
@endif
