<?php

use App\Http\Controllers\ContinentesController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\PaisesController;
use App\Http\Controllers\Continentes_PaisesController;
use Illuminate\Support\Facades\Route;
//inicio
Route::get('/',[InicioController::class,'inicio']);

//continentes

Route::get("/cadastrar_continentes",[ContinentesController::class,"formCadastrarContinentes"]);
Route::get("/listar_continentes",[ContinentesController::class,"listar"]);
Route::post("/criar_continentes",[ContinentesController::class,"criar"]);
Route::delete("/deletar_continentes/{id}",[ContinentesController::class,"deletar"]);

//paises

Route::get("/cadastrar_paises",[PaisesController::class,"formCadastrarPaises"]);
Route::get("/listar_paises",[PaisesController::class,"listar"]);
Route::post("/criar_paises",[PaisesController::class,"criar"]);
Route::delete("/deletar_paises/{id}",[PaisesController::class,"deletar"]);

//continentes_paises

Route::get("/cadastrar_continentes_paises",[Continentes_PaisesController::class,"formCadastrarContinentesPaises"]);
Route::get("/listar_continentes_paises",[Continentes_PaisesController::class,"listar"]);
Route::post("/criar_continentes_paises",[Continentes_PaisesController::class,"criar"]);
Route::delete("/deletar_continentes_paises/{id}",[Continentes_PaisesController::class,"deletar"]);