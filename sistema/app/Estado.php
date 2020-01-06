<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    protected $table = 'estados';
    protected $primaryKey = 'id';
    protected  $fillable = ['nombre'];



    public function changeStatus($id,$status){
        $estado = Estado::findOrFail($id);
        $estado->estatus = $status;
        return $estado->save();
    }
    public function scopeGetStates($query){
        return $query->where('estatus','activo')->orderBy('id','desc');
    }
}
