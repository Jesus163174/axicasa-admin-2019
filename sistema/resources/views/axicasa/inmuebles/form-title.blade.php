<div class="card">
    <div class="card-header">
        <h4 class="card-title">1.Titulo de la propiedad</h4>
    </div>
    <div class="card-body">
        <div class="form-group">
            {!! Form::label('titulo', 'Titulo de la propiedad'); !!}
            {!! Form::text('titulo', $inmueble->titulo,['class'=>'form-control']); !!}
            {!! $errors->first('titulo','<span class="error-input">:message</span>') !!}
        </div>

        <div class="form-group">
            {!! Form::label('descripcion', 'Descripción de la propiedad'); !!}
            {!! Form::textarea('descripcion', $inmueble->descripcion, ['class'=>'form-control']) !!}
            {!! $errors->first('descripcion','<span class="error-input">:message</span>') !!}
        </div>
    </div>
</div>
