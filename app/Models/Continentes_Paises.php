<?php

namespace App\Models;
use App\Models\Continentes;
use App\Models\Paises;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Continentes_Paises extends Model{
    use HasFactory;

    protected $table = 'continentes_paises';

    public function continentes()
    { 
        return $this->belongsTo(Continentes::class, 'continentes_id');
    }

    public function paises(){
        return $this->belongsTo(Paises::class, 'paises_id');
    }
   
}
