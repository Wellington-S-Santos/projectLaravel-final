<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Continentes_Paises;
use App\Models\Paises;

class Continentes extends Model
{
    use HasFactory;

    protected $table = 'continentes';

    public function continentesPaises(){
        return $this->hasMany(Continentes_Paises::class);
    }
}

