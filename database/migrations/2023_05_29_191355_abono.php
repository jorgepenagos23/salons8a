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

  Schema::create('abono', function (Blueprint $table) {
            $table->id();

            $table->date('fecha_pago');
            $table->decimal('abono_cantidad', 8, 2);
            // Agrega más columnas según tus necesidades

            $table->unsignedBigInteger('id_paquete');
            $table->foreign('id_paquete')->references('id_paquete')->on('paquetes')->onDelete('cascade');

            $table->unsignedBigInteger('cliente_id');
            $table->foreign('cliente_id')->references('id')->on('usuarios')->onDelete('cascade');
            $table->timestamps();
        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
