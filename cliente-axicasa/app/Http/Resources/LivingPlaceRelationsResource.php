<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LivingPlaceRelationsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'type_living_place'=>$this->tipoInmuble->nombre,
            'address'=>[
                "colonia"=>$this->colonia->nombre,
                'municipio'=>$this->colonia->municipio->nombre,
                'estado'=>$this->colonia->municipio->estado->nombre
            ],
            'pictures'=>[
                'images'=>$this->pictures
            ]
        ];
    }
}
