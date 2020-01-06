<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Colonia;
use App\TipoInmueble;
class Inmueble extends Model{

    protected $fillable = [
        'titulo',
        'descripcion',
        'estatus',
        'tipo_inmueble',
        'numero_habitaciones',
        'numero_baños',
        'numero_pisos',
        'nivel_departamento',
        'tipo_venta',
        'costo',
        'area',
        'anio_construccion',
        'colonia_id'
    ];

    public function colonia(){
        return $this->belongsTo(Colonia::class,'colonia_id');
    }
    public function tipoInmueble(){
        return $this->belongsTo(TipoInmueble::class,'tipo_inmueble');
    }
    public function createNew($livinPlaceData){
        return Inmueble::create($livinPlaceData);
    }
    public function edit($livingPlace,$data){
        return $livingPlace->fill($data)->save();
    }
    public function editStatus($livingPlace,$status){
        $livingPlace->estatus = $status;
        return $livingPlace->save();
    }
    public function scopeGetinmuebles($query){
        return $query->orderBy('created_at','desc');
    }
}
