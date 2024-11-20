<?php

namespace App\Models;
use App\Models\Continentes;
use App\Models\Paises;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Continentes_Paises extends Model
{
    use HasFactory;

    // Definindo a tabela explícita
    protected $table = 'continentes_paises';
    

    // Definindo os campos atribuíveis
    protected $fillable = ['continentes_id', 'paises_id'];

  
    public function index(){
    // Carrega a relação de continentes e países com eager loading
    $continentesPaises = Continentes_Paises::with(['continentes', 'paises'])->get();

    return view('continentes_paises', compact('continentes_paises'));
    }
}
