<?php

namespace App\Http\Controllers;
use App\Http\Requests\StateStoreRequest;
use App\Http\Requests\StateUpdateRequest;
use App\Estado;
use Illuminate\Http\Request;

class StateController extends Controller
{

    public function index(){
        $states = Estado::getStates()->get();
        return view('axicasa.admin.estados.index',compact('states'));
    }
    public function create(){
        $state = new Estado();
        return view('axicasa.admin.estados.create',compact('state'));
    }
    public function store(StateStoreRequest $request){
        try{
            $state = Estado::create($request->all());
            $message = "El estado fue registrado correctamente";
            return redirect('/administrador/estados/')->with('status_success',$message);
        }catch (\Exception $e){
           return response()->json($e->getMessage());
        }
    }
    public function show($id){
        $state = Estado::findOrFail($id);
        return view('axicasa.admin.states.show',compact('state'));
    }
    public function edit($id){
        $state = Estado::findOrFail($id);
        return view('axicasa.admin.estados.edit',compact('state'));
    }
    public function update(StateUpdateRequest $request, $id){
        try{
            $state = Estado::findOrFail($id);
            $state->fill($request->all());
            $state->save();
            $message = "El estado fue actualizado correctamente";
            return redirect('/administrador/estados/')->with('status_success',$message);
        }catch (\Exception $e){
            return response()->json($e->getMessage());
        }
    }
    public function destroy($id){
        $state = new Estado();
        $state->changeStatus($id,'eliminado');
        $message = "El estado fue eliminado correctamente";
        return redirect('/administrador/estados/')->with('status_success',$message);
    }
}
