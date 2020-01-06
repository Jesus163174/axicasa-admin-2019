<?php

namespace App\Http\Controllers;

use App\Foto;
use Illuminate\Http\Request;

class FotoController extends Controller{

    public function store(Request $request,$livingPlace,Foto  $foto){
        try{
            $response = $foto->upload($request,$livingPlace);
            return back()->with('status_success','Fotos Agregadas correctamente');
        }catch(\Exception $e){
            dd($e);
            return back()->with('status_warning',$e->getMessage());
        }
    }
}
