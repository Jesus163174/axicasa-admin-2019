<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Foto extends Model
{
    protected $urls = array();

    public function getPictures($livingPlaceId){
        return Foto::where('inmueble_id',$livingPlaceId)->orderBy('created_at','desc');
    }

    public function upload($request,$livingPlaceId){
        $this->storePicture($request->file('fotos'),$livingPlaceId);
        $this->savePicture($livingPlaceId);
    }

    public function storePicture($pictures,$livingPlaceId){
        foreach ($pictures as $picture){
            $name = 'inmueble_'.time().'_'.rand(0,199999).'.jpg';
            \Storage::disk('local')->put('fotos/inmueble_'.$livingPlaceId.'/'.$name,  \File::get($picture));
            array_push($this->urls,'axicasa/fotos/inmueble_'.$livingPlaceId.'/'.$name);
        }
    }
    public function savePicture($livingPlaceId){
        foreach($this->urls as $url){
           $picture = new Foto();
           $picture->url_foto = $url;
           $picture->inmueble_id = $livingPlaceId;
           $picture->save();
        }
    }

}
