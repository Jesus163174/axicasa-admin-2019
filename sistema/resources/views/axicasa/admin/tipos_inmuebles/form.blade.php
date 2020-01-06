<div class="form-group">
    {!! Form::label('nombre', 'Nombre del tipo de inmueble'); !!}
    {!! Form::text('nombre', $tipo->nombre,['class'=>'form-control']); !!}
    {!! $errors->first('nombre','<span class="error-input">:message</span>') !!}
</div>
