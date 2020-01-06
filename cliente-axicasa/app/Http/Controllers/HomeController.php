<?php

namespace App\Http\Controllers;

use App\Foto;
use App\LivinPlace;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $slider = LivinPlace::where('estatus','activo')->orderBy('created_at','desc')->paginate(3);
        $livingPlaces = LivinPlace::where('estatus','activo')->orderBy('created_at','desc')->paginate(6);
        return view('welcome',compact('slider','livingPlaces'));
    }
    public function detail(Request $request){
        $livingPlace = LivinPlace::findOrFail($request->codigo);
        $fotos       = Foto::where('inmueble_id',$request->codigo)->get();
        return view('show',compact('livingPlace','fotos'));
    }
}
