<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Direccion extends Model
{
    protected $table = 'direcciones';
    protected $fillable = ['inmueble_id','direccion_detallada'];
    public function addAddress($address,$livindPlaceId){
        return Direccion::create([
            'inmueble_id'=>$livindPlaceId,
            'direccion_detallada'=>$address
        ]);
    }
}
