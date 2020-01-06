<?php

namespace App\Http\Controllers;
use App\Colonia;
use App\Foto;
use App\Http\Requests\InmubleS1StoreRequest;
use App\Http\Requests\FeatureInmubleS2StoreRequest;
use App\Http\Requests\UbicacionInmubleS4StoreRequest;
use App\Direccion;
use App\Inmueble;
use App\TipoInmueble;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DB;
class InmuebleController extends Controller
{
    public function index(){
        $inmuebles = Inmueble::getInmuebles()->get();
        return view('axicasa.inmuebles.index',compact('inmuebles'));
    }
    public function create(){
        $inmueble = new Inmueble();
        $tipos    = TipoInmueble::getTypesInmueble()->pluck('nombre','id');
        $colonias = Colonia::getColonias()->pluck('nombre','id');
        $direccion = new Direccion;
        return view('axicasa.inmuebles.create',compact('inmueble','tipos','colonias','direccion'));
    }
    public function  store(InmubleS1StoreRequest $request,Inmueble $inmueble){
        try{
            $livinPlace = $inmueble->createNew($request->all());
            $address    = new Direccion();
            $address->addAddress($request->direccion_detallada,$livinPlace->id);
            return redirect('inmuebles/'.$livinPlace->id)->with('Agregado correctamente');
        }catch(\Exception $e){
            return back()->with('status_warning',"Error en el servidor: ".$e->getMessage());
        }
    }
    public function show($id,Foto $picture){
        $inmueble  = Inmueble::findOrFail($id);
        $tipos     = TipoInmueble::getTypesInmueble()->pluck('nombre','id');
        $colonias  = Colonia::getColonias()->pluck('nombre','id');
        $direccion = Direccion::where('inmueble_id',$inmueble->id)->first();
        $fotos     = $picture->getPictures($inmueble->id)->get();
        return view('axicasa.inmuebles.show',compact('inmueble','tipos','colonias','direccion','fotos'));
    }
    public function update(Request $request, $id, Inmueble $livingPlace){
        try {
            $inmueble  = Inmueble::findOrFail($id);
            $response  = $livingPlace->edit($inmueble,$request->all());
            return redirect('inmuebles/'.$inmueble->id)->with('status_success',"Actualizado correctamente");
        }catch(\Exception $e){
            return back()->with('status_warning',"Error en el servidor: ".$e->getMessage());
        }
    }
    public function status(Request $request, $inmuebleId, Inmueble $livingPlace){
        $inmueble = Inmueble::findOrFail($inmuebleId);
        $inmueble->estatus = $request->estatus;
        $inmueble->save();
        return  redirect('inmuebles/'.$inmuebleId)->with('status_success',"Actualizado correctamente");
    }
    public function destroy($id){

    }
}
