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
        Schema::create('jazigo_historico', function (Blueprint $table) {
            $table->id(); 
            $table->unsignedBigInteger('id_jazigo');
            $table->unsignedBigInteger('id_sepultamento');
            $table->timestamps(); 

            $table->foreign('id_jazigo')->references('id')->on('jazigo');
            $table->foreign('id_sepultamento')->references('id')->on('sepultamento');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jazigo_historico');
    }
};
