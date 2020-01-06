<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Colony extends Model
{
    protected $table = 'colonias';
    public function municipio(){
        return $this->belongsTo('App\Models\Municipio','municipio_id');
    }
}
