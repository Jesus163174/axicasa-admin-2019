<?php

namespace App\Http\Controllers;

use App\TipoInmueble;
use Illuminate\Http\Request;
use App\Http\Requests\TipoinmuebleStoreRequest;
class TipoInmuebleController extends Controller
{

    public function index(){
        $tipos = TipoInmueble::getTypesInmueble()->get();
        return view('axicasa.admin.tipos_inmuebles.index',compact('tipos'));
    }
    public function create(){
        $tipo = new TipoInmueble();
        return view('axicasa.admin.tipos_inmuebles.create',compact('tipo'));
    }
    public function store(TipoinmuebleStoreRequest $request){
        try {
            $types = TipoInmueble::create($request->all());
            $message = "El tipo de inmueble fue registrado correctamente";
            return redirect('/administrador/tipo_inmuebles')->with('status_success',$message);
        }catch(\Exception $e){
            return response()->json($e->getMessage());
        }
    }
    public function show($id){
        $tipo = TipoInmueble::findOrFail($id);
        return view('axicasa.admin.tipos_inmuebles.show',compact('tipo'));
    }
    public function edit($id){
        $tipo = TipoInmueble::findOrFail($id);
        return view('axicasa.admin.tipos_inmuebles.edit',compact('tipo'));
    }
    public function update(TipoinmuebleStoreRequest $request, $id){
        try {
            $type = TipoInmueble::findOrFail($id);
            $type->fill($request->all());
            $type->save();
            $message = "El tipo de inmueble fue actualizado correctamente";
            return redirect('/administrador/tipo_inmuebles')->with('status_success',$message);
        }catch(\Exception $e){
            return response()->json($e->getMessage());
        }
    }
    public function destroy($id){
        $type = new TipoInmueble();
        $type->changeStatus($id,"eliminado");
        $message = "El tipo de inmueble fue eliminado correctamente";
        return redirect('/administrador/tipo_inmuebles')->with('status_success',$message);
    }
}
