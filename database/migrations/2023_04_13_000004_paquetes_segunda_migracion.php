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

            $table->id('id_paquete');
            $table->string("nombre");
            $table->string("descripcion");
            $table->decimal("costo",10,3);
            $table->string('imagen')->nullable();
            $table->enum('estado', ['0', '1'])->default('0');
            $table->string("capacidad");
            $table->unsignedBigInteger('gerente_id');
            $table->foreign('gerente_id')->references('id')->on('gerentes')->onDelete('cascade');
            $table->timestamps();

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
