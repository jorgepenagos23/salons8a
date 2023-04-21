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
    Schema::create('evento_servicio', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('evento_id')->nullable();
        $table->foreign('evento_id')->references('id')->on('eventos')->onDelete('cascade');
        $table->unsignedBigInteger('servicio_id')->nullable();
        $table->foreign('servicio_id')->references('id')->on('servicios')->onDelete('cascade');
        $table->timestamps();
        $table->timestamp('deleted_at')->nullable();

    });
}

/**
 * Reverse the migrations.
 */
public function down(): void
{
    Schema::dropIfExists('evento_servicio');
}
};
