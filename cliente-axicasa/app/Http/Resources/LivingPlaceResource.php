<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LivingPlaceResource extends JsonResource
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
            'id'=>$this->id,
            'attributes'=>[
                'title'=>$this->titulo,
                'description'=>$this->descripcion,
                'price'=>'$'.number_format($this->costo,2,',','.'),
                'cover'=>'http://localhost:80/'.$this->portada,
                'status'=>$this->estatus,
                'label_type_livin_place'=>$this->isToSell(),
                'bathrooms'=>$this->numero_baños,
                'bethrooms'=>$this->numero_habitaciones,
                'floor_levels'=>$this->numero_pisos,
                'area'=>$this->area.' M^2',
                'build_years'=>$this->anio_construccion,
                'tipo_venta'=>strtoupper($this->tipo_venta)
            ],
            'relationsships'=> new LivingPlaceRelationsResource($this),
            'created_at'=>$this->created_at->format('Y-m-d'),
            'updated_at'=>$this->updated_at->format('Y-m-d')

        ];
    }
}
