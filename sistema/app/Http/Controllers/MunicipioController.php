<?php

namespace App\Http\Controllers;

use App\Estado;

use App\Municipio;
use Illuminate\Http\Request;
use App\Http\Requests\StoreMunicipioRequest;
class MunicipioController extends Controller
{
    public function index(){
        $municipios = Municipio::getMunicipios()->with('estado')->get();
        return view('axicasa.admin.municipios.index',compact('municipios'));
    }
    public function create(){
        $municipio = new Municipio();
        $estados   = Estado::pluck('nombre','id');
        return view('axicasa.admin.municipios.create',compact('municipio','estados'));
    }
    public function store(StoreMunicipioRequest $request){
        try{
            $municipio = Municipio::create($request->all());
            $message = "El municipio".$municipio->nombre."fue registrado correctamente";
            return redirect('/administrador/municipios/')->with('status_success',$message);
        }catch (\Exception $e){
            return response()->json($e->getMessage());
        }
    }
    public function show($id){
        $municipio = Municipio::findOrFail($id);
        return view('axicasa.admin.municipios.show',compact('municipio'));
    }
    public function edit($id){
        $municipio = Municipio::findOrFail($id);
        $estados   = Estado::pluck('nombre','id');
        return view('axicasa.admin.municipios.edit',compact('municipio','estados'));
    }
    public function update(StoreMunicipioRequest $request, $id){
        try{
            $municipio = Municipio::findOrFail($id);
            $municipio->fill($request->all());
            $municipio->save();
            $message = "El municipio fue actualizado correctamente";
            return redirect('/administrador/municipios/')->with('status_success',$message);
        }catch (\Exception $e){
            return response()->json($e->getMessage());
        }
    }
    public function destroy($id){
        $municipio = Municipio::findOrFail($id);
        $municipio->estatus = 'eliminado';
        $municipio->save();
        $message = "El municipio fue eliminado correctamente";
        return redirect('/administrador/municipios/')->with('status_success',$message);
    }
}
