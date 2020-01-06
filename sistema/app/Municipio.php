<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Estado;
class Municipio extends Model
{
    protected $table = 'municipios';
    protected $primaryKey  = 'id';
    protected $fillable = ['estado_id','nombre'];

    public  function  estado(){
        return $this->belongsTo(Estado::class,'estado_id');
    }
    public function changeStatus($id,$status){
        $municipio = Estado::findOrFail($id);
        $municipio->estatus = $status;
        return $municipio->save();
    }
    public function scopeGetMunicipios($query){
        return $query->where('estatus','activo')->orderBy('id','desc');
    }
}
