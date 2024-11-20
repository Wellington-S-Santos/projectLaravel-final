<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Paises;

class Continentes extends Model
{
    use HasFactory;

    public function paises()
    {
        return $this->belongsToMany(Paises::class, 'continentes_paises', 'continentes_id', 'paises_id');
    }
}

