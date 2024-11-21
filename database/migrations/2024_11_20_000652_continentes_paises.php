<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('continentes_paises', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('continentes_id');
            $table->unsignedBigInteger('paises_id');
            $table->string('localizacao')->nullable();
            $table->timestamps();
    
            // Definindo as chaves estrangeiras
            $table->foreign('continentes_id')->references('id')->on('continentes');
            $table->foreign('paises_id')->references('id')->on('paises');

            $table->unique(['continentes_id', 'paises_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void{
        
        Schema::dropIfExists('continentes_paises');
    }
};