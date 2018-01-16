<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{
    protected $table = 'inventario';
    
    public function material() {
        return $this->belongsTo('App\Materiales');        
    }
}
