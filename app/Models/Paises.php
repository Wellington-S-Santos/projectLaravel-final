<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Continentes_Paises;
use App\Models\Continentes;

class Paises extends Model
{
    use HasFactory;

     
    protected $table = 'paises';


    public function continentesPaises(){
    return $this->hasMany(Continentes_Paises::class);
    }
}
