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
        Schema::create('viajes', function (Blueprint $table) {
            $table->id();
            $table->string('fecha');
            $table->string('num_plazas');
            $table->string('otros');

            $table->unsignedBigInteger('viajero_id');
            $table->foreign('viajero_id')->references('id')->on('viajeros')->onDelete('cascade');

            $table->unsignedBigInteger('origen_id');
            $table->foreign('origen_id')->references('id')->on('origens')->onDelete('cascade');

            $table->unsignedBigInteger('destino_id');
            $table->foreign('destino_id')->references('id')->on('destinos')->onDelete('cascade');


            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('viajes');
    }
};
