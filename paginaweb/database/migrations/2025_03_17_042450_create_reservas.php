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
            $table->string('name');
            $table->foreign('name')->references('name')->on('users')->onDelete('cascade');
            $table->string('email');
            $table->foreign('email')->references('email')->on('users')->onDelete('cascade');
            $table->string('servicio');
            $table->foreign('servicio')->references('servicio')->on('servicios')->onDelete('cascade');
            $table->string('costo');
            $table->foreign('costo')->references('costo')->on('servicios')->onDelete('cascade');
            $table->string('fecha');
            $table->foreign('fecha')->references('fecha')->on('servicios')->onDelete('cascade');
            $table->timestamps();
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
