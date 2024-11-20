<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Continentes;

class Paises extends Model
{
    use HasFactory;

    public function continentes()
    {
        return $this->belongsToMany(Continentes::class, 'continentes_paises', 'paises_id', 'continentes_id');
    }
}
