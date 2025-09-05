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
        Schema::create('paquetes', function (Blueprint $table) {
            $table->id(); // clave primaria
            $table->string('nombre'); // nombre del paquete
            $table->text('descripcion'); // descripción larga
            $table->decimal('precio', 10, 2); // precio
            $table->string('duracion'); // días o noches
            $table->string('imagen'); // ruta de la imagen
            $table->timestamps(); // created_at / updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paquetes');
    }
};
