<div class="card">
    <div class="card-header">
        <h4 class="card-title">3.Ubicación de la propiedad</h4>
    </div>
    <div class="card-body">
        <div class="form-group">
            {!! Form::label('colonia_id', 'Colonia'); !!}
            {!! Form::select('colonia_id', $colonias,$inmueble->colonia_id, ['class' => 'form-control','placeholder'=>"Selecciona la colonia "]) !!}
            {!! $errors->first('colonia_id','<span class="error-input">:message</span>') !!}
        </div>
        <div class="form-group">
            {!! Form::label('direccion_detallada', 'Dirección detallada de la propiedad'); !!}
            {!! Form::textarea('direccion_detallada', $direccion->direccion_detallada, ['class'=>'form-control']) !!}
            {!! $errors->first('direccion_detallada','<span class="error-input">:message</span>') !!}
        </div>
    </div>
    <div class="card-footer">
        <button class="btn btn-success" type="submit">{{$btn}}</button>
    </div>
</div>
