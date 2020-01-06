<div class="form-group">
    {!! Form::label('nombre', 'Nombre del municipio'); !!}
    {!! Form::text('nombre', $municipio->nombre,['class'=>'form-control']); !!}
    {!! $errors->first('nombre','<span class="error-input">:message</span>') !!}
</div>
<div class="form-group">
    {!! Form::label('estado_id', 'Estado'); !!}
    {!! Form::select('estado_id', $estados,$municipio->estado_id, ['class' => 'form-control','placeholder'=>"Selecciona un estado"]) !!}
    {!! $errors->first('estado_id','<span class="error-input">:message</span>') !!}
</div>
