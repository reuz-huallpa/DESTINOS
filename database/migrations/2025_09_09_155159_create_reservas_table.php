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
        Schema::create('reservas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();   // usuario que reserva
            $table->unsignedBigInteger('paquete_id');            // paquete reservado
            $table->integer('cantidad')->default(1);
            $table->string('estado')->default('pendiente');      // estado de la reserva
            $table->timestamps();

            // relaciones (opcional pero recomendable)
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('paquete_id')->references('id')->on('paquetes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservas');
    }
};
