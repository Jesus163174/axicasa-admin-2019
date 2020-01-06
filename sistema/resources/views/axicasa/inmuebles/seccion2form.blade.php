<div class="form-group">
    {!! Form::label('tipo_inmueble', 'Tipo del inmueble'); !!}
    {!! Form::select('tipo_inmueble', $tipos,$inmueble->tipo_inmueble, ['class' => 'form-control','placeholder'=>"Selecciona el tipo de inmueble"]) !!}
    {!! $errors->first('tipo_inmueble','<span class="error-input">:message</span>') !!}
</div>
<div class="form-group">
    {!! Form::label('numero_habitaciones', 'Numero de habitaciones'); !!}
    {!! Form::text('numero_habitaciones', $inmueble->numero_habitaciones,['class'=>'form-control']); !!}
    {!! $errors->first('numero_habitaciones','<span class="error-input">:message</span>') !!}
</div>
<div class="form-group">
    {!! Form::label('numero_baños', 'Numero de baños'); !!}
    {!! Form::text('numero_baños', $inmueble->numero_baños,['class'=>'form-control']); !!}
    {!! $errors->first('numero_baños','<span class="error-input">:message</span>') !!}
</div>
<div class="form-group">
    {!! Form::label('numero_pisos', 'Numero de pisos(Casas).'); !!}
    {!! Form::text('numero_pisos', $inmueble->numero_pisos,['class'=>'form-control']); !!}
    {!! $errors->first('numero_pisos','<span class="error-input">:message</span>') !!}
</div>
<div class="form-group">
    {!! Form::label('nivel_departamento', 'Numero del departamento(Departamentos o casa duplex).'); !!}
    {!! Form::text('nivel_departamento', $inmueble->nivel_departamento,['class'=>'form-control']); !!}
    {!! $errors->first('nivel_departamento','<span class="error-input">:message</span>') !!}
</div>
<div class="form-group">
    {!! Form::label('tipo_venta', 'Venta o renta'); !!}
    {!! Form::select('tipo_venta', ['compra' => 'Venta', 'renta' => 'Renta'], $inmueble->tipo_venta, ['placeholder' => 'Selecciona una opción','class'=>'form-control']) !!}
    {!! $errors->first('tipo_venta','<span class="error-input">:message</span>') !!}
</div>
<div class="form-group">
    {!! Form::label('costo', 'Costo de la propiedad'); !!}
    {!! Form::text('costo', $inmueble->costo,['class'=>'form-control']); !!}
    {!! $errors->first('costo','<span class="error-input">:message</span>') !!}
</div>
<div class="form-group">
    {!! Form::label('area', 'Area de la propiedad (M^2).'); !!}
    {!! Form::text('area', $inmueble->area,['class'=>'form-control']); !!}
    {!! $errors->first('area','<span class="error-input">:message</span>') !!}
</div>
<div class="form-group">
    {!! Form::label('anio_construccion', 'Año de la construccion'); !!}
    {!! Form::text('anio_construccion', $inmueble->anio_construccion,['class'=>'form-control']); !!}
    {!! $errors->first('anio_construccion','<span class="error-input">:message</span>') !!}
</div>

