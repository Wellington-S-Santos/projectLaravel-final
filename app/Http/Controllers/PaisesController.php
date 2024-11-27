<?php

namespace App\Http\Controllers;
use App\Models\Paises;
use App\Models\Continentes_Paises;
use Illuminate\Http\Request;


class PaisesController extends Controller
{
    public function criar(Request $request){
        $pais = new Paises;
        $pais-> name = $request->name;
        $pais->descricao = $request->descricao;
        $pais->tamanho = $request->tamanho;
        $pais->save();
        return redirect('/listar_paises');
    }


    public function formCadastrarPaises(){
        return view("cadastrar_paises");
    }
    public function listar(){
        $paises = Paises::all();
        return view("paises", ["paises"=> $paises]);
    }

    public function deletar($id){
        $paises = Paises ::find( $id );
        $paises->continentesPaises->each(function ($continentesPaises){
            $continentesPaises->delete();
        });
        $paises->delete();
        

        return redirect("/listar_paises");
    }
}
