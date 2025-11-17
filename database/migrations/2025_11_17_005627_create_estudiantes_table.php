<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->id();

            $table->string('nombres');
            $table->string('apellidos');
            $table->string('documento')->unique();
            $table->string('correo')->unique();
            $table->string('telefono')->nullable();
            $table->string('programa')->nullable();
            $table->integer('semestre')->nullable();
            $table->date('fecha_ingreso')->nullable();

            $table->boolean('estado')->default(1);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('estudiantes');
    }
};
