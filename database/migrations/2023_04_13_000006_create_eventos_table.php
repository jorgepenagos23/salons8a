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
        Schema::create('eventos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cliente_id')->nullable();
            $table->unsignedBigInteger('id_paquete')->nullable();            $table->string('nombre', 50);
            $table->text('descripción');
            $table->dateTime('fecha_evento');
            $table->string('imagen')->nullable();
            $table->enum('estado',['0','1'])->default('0');
            $table->foreign('cliente_id')->references('id')->on('usuarios')->onDelete('cascade');
            $table->foreign('id_paquete')->references('id_paquete')->on('paquetes')->onDelete('cascade');
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eventos');
    }
};
