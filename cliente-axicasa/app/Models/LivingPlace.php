<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LivingPlace extends Model
{
    protected $table = 'inmuebles';

    public function pictures(){
        return $this->hasMany('App\Models\Foto','inmueble_id');
    }
    public function colonia(){
        return $this->belongsTo('App\Models\Colony','colonia_id');
    }
    public function tipoInmuble(){
        return $this->belongsTo('App\Models\TipoInmueble','tipo_inmueble');
    }
    public function isToSell(){
        return ($this->tipo_venta == 'compra') ? 'badge-sale' : 'badge-rent';
    }
}
