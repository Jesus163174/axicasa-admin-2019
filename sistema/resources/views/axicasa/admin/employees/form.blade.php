<div class="form-group">
    {!! Form::label('name', 'Nombre completo'); !!}
    {!! Form::text('name', $user->name,['class'=>'form-control','required'=>true]); !!}
    {!! $errors->first('name','<span class="error-input">:message</span>') !!}
</div>
<div class="form-group">
    {!! Form::label('email', 'Correo electronico del empleado'); !!}
    {!! Form::text('email', $user->email,['class'=>'form-control','required'=>true]); !!}
    {!! $errors->first('email','<span class="error-input">:message</span>') !!}
</div>
<div class="form-group">
    {!! Form::label('password', 'Contraseña'); !!}
    {!! Form::password('password',['class'=>'form-control']); !!}
    {!! $errors->first('password','<span class="error-input">:message</span>') !!}
</div>
