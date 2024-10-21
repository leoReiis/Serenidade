<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('jazigo', function (Blueprint $table) {
            $table->id(); 
            $table->unsignedBigInteger('id_localizacao');
            $table->unsignedBigInteger('id_tamanho');
            $table->unsignedBigInteger('id_sepultado')->unique();
            $table->enum('status', ['disponível', 'ocupado', 'reservado']);
            $table->timestamps(); 

            $table->foreign('id_localizacao')->references('id')->on('jazigo_localizacao');
            $table->foreign('id_tamanho')->references('id')->on('jazigo_tamanho');
            $table->foreign('id_sepultado')->references('id')->on('sepultamento');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jazigo');
    }
};
