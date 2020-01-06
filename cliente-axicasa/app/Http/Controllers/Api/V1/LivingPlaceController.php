<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\LivingPlace;
use Illuminate\Http\Request;
use App\Http\Resources\LivingPlaceResource;
use App\Http\Resources\LivingPlaceCollection;
use App\Http\Controllers\Controller;

class LivingPlaceController extends Controller{

    public function index(){
        return new LivingPlaceCollection(LivingPlace::paginate(3));
    }
    public function show($livingPlaceId){
        LivingPlaceResource::withoutWrapping();
        $livingPlace   = LivingPlace::findOrFail($livingPlaceId);
        return new LivingPlaceResource($livingPlace);
    }

}
