<?php

namespace App\Http\Controllers;
use App\Models\Paises;
use App\Models\Continentes;
use App\Models\Continentes_Paises;
use Illuminate\Http\Request;

class Continentes_PaisesController extends Controller
{
    public function formCadastrarContinentesPaises(){
        $paises = Paises::all();
        $continentes = Continentes::all();
        return view("cadastrar_continentes_paises",['paises'=>$paises, 'continentes'=>$continentes]);
    }
    public function criar(Request $request){
        
        $continentes = $request->input('continentes');
        $paises = $request->input('paises');

        $continentes = Continentes::find($continentes);
        $paises = Paises::find($paises);

        if (!$continentes || !$paises) {
    
            return back()->withErrors('invalido continente ou país.');
        }

        $continentesPaises = new Continentes_Paises;
        $continentesPaises->continentes_id = $continentes->id;
        $continentesPaises->paises_id = $paises->id;
        $continentesPaises->localizacao = $request->localizacao;
        $continentesPaises->save();

        return redirect("/listar_continentes_paises");
    }

    public function listar(){
        $continentesPaises = Continentes_Paises::all();
        return view("continentes_paises", ["continentesPaises" => $continentesPaises]);

    }
    public function deletar($id){
        $continentesPaises = new Continentes_Paises;
        $continentesPaises->find($id)->delete();
        
        return redirect("/listar_continentes_paises");
    }
}