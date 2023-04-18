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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->charset='utf8mb4';
            $table->collation='utf8mb4_unicode_ci';
            $table->id();
            $table->string('nombre',20);
            $table->string('tipo_usuario',20);
            $table->string('apellidos',20);
            $table->text('direccion');
            $table->text('Telefono');
            $table->integer('edad');
            $table->string('email')->unique();
            $table->string('contraseña')->nullable(false); // Definir la co
            $table->timestamps(); // Agrega created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
