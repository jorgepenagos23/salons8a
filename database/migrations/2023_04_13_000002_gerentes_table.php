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
        Schema::create('gerentes', function (Blueprint $table) {
            $table->charset='utf8mb4';
            $table->collation='utf8mb4_unicode_ci';
            $table->id();
            $table->string('nombre',20);
            $table->string('usuario')->unique();
            $table->string('apellidos',20);
            $table->text('direccion');
            $table->text('telefono');
            $table->integer('edad');
            $table->string('email')->unique();
            $table->string('password');
            $table->string("fecha_nacimiento")->default('00-00-0000');
            $table->string('imagen')->nullable();
            $table->rememberToken();
            $table->string('token_autorizacion')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gerentes');
    }
};
