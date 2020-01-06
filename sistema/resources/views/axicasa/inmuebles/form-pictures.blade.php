<div class="card">
    <div class="card-header">
        <h4 class="card-title">3.Fotografias de la propiedad</h4>
    </div>
    <div class="card-body">
        <div class="form-group">
            {!! Form::label('fotos','Selecciona las fotos de la propiedad') !!}
            {!! Form::file('fotos[]',['class'=>'form-control','id'=>'fotos','multiple'=>true,'required'=>true]) !!}
        </div>
    </div>
</div>
