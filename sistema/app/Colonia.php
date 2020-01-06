<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Colonia extends Model
{
    protected $table = 'colonias';
    protected $primaryKey = 'id';
    protected $fillable = ['nombre','municipio_id'];

    public function municipio(){
        return $this->belongsTo(Municipio::class,'municipio_id');
    }

    public function changeStatus($id,$status){
        $estado = Colonia::findOrFail($id);
        $estado->estatus = $status;
        return $estado->save();
    }
    public function scopeGetColonias($query){
        return $query->where('estatus','activo')->orderBy('id','desc');
    }
}
