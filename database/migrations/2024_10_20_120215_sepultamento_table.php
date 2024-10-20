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
        Schema::create('sepultamento', function (Blueprint $table) {
            $table->id(); 
            $table->date('data_sepultamento'); 
            $table->time('hora_sepultamento'); 
            $table->string('nome_falecido'); 
            $table->string('responsavel'); 
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sepultamento');
    }
};
