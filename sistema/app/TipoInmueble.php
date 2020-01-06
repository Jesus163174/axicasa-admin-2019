<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoInmueble extends Model
{
    protected  $table = 'tipo_inmuebles';
    protected  $primaryKey = 'id';
    protected $fillable = ['nombre'];

    public function  changeStatus($id,$status){
        $tipoInmueble = TipoInmueble::find($id);
        $tipoInmueble->estatus = $status;
        return $tipoInmueble->save();
    }
    public function scopeGetTypesInmueble($query){
        return $query->where('estatus','activo')->orderBy('id','desc');
    }
}
