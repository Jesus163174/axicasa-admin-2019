<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FeatureInmubleS2StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'tipo_inmueble'=>'required',
            'numero_habitaciones'=>'required',
            'numero_baños'=>'required',
            'numero_pisos'=>'required',
            'nivel_departamento'=>'required',
            'tipo_venta'=>'required',
            'costo'=>'required',
            'area'=>'required',
            'anio_construccion'=>'required'
        ];
    }
}
