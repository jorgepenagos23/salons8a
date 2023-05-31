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
            $table->string('usuario',20);
            $table->string('apellidos',20);
            $table->text('direccion');
            $table->text('telefono');
            $table->integer('edad');
            $table->string('token', 500)->nullable()->unique();
            $table->string('email')->unique();
            $table->enum('Roles', ['Gerente', 'Cliente', 'Empleado'])->default('Cliente');
            $table->string('password')->nullable(false); // Definir la co
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();
        });






    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
