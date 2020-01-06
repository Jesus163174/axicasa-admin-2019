<?php

namespace App\Http\Controllers;

use App\Colonia;
use App\Estado;
use App\Municipio;
use Illuminate\Http\Request;
use App\Http\Requests\ColoniaStoreRequest;

class ColoniaController extends Controller
{
    public function index(){
        $colonias = Colonia::getColonias()->get();
        return view('axicasa.admin.colonias.index',compact('colonias'));
    }
    public function create(){
        $colonia = new Colonia();
        $estados = Estado::pluck('nombre','id');
        $municipios = Municipio::pluck('nombre','id');
        return view('axicasa.admin.colonias.create',compact('colonia','estados','municipios'));
    }
    public function store(ColoniaStoreRequest $request){
        try{
            $colonia = Colonia::create($request->all());
            $message = "La colonias ".$colonia->nombre." fue registrada correctamente";
            return redirect('/administrador/colonias/')->with('status_success',$message);
        }catch (\Exception $e){
            return response()->json($e->getMessage());
        }
    }
    public function show($id){
        $colonia = Colonia::findOrFail($id);
        return response()->json($colonia);
        return view('axicasa.admin.colonias.show',compact('colonia'));
    }
    public function edit($id){
        $colonia = Colonia::findOrFail($id);
        $estados = Estado::pluck('nombre','id');
        $municipios = Municipio::pluck('nombre','id');
        return view('axicasa.admin.colonias.edit',compact('colonia','municipios','estados'));
    }
    public function update(ColoniaStoreRequest $request, $id){
        try{
            $colonia = Colonia::findOrFail($id);
            $colonia->fill($request->all());
            $colonia->save();
            $message = "La colonias fue actualizada correctamente";
            return redirect('/administrador/colonias/')->with('status_success',$message);
        }catch (\Exception $e){
            return response()->json($e->getMessage());
        }
    }
    public function destroy($id){
        $colonia = new Colonia();
        $colonia->changeStatus($id,'eliminado');
        $message = "La colonias fue eliminada correctamente";
        return redirect('/administrador/colonias/')->with('status_success',$message);
    }
}
