<div class="form-group">
    {!! Form::label('nombre', 'Nombre del estado'); !!}
    {!! Form::text('nombre', $state->nombre,['class'=>'form-control']); !!}
    {!! $errors->first('nombre','<span class="error-input">:message</span>') !!}
</div>
