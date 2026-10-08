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
        Schema::create('planejamento_diarios', function (Blueprint $table) {
            $table->id();
            $table->date('data')->nullable();
            $table->string('objetivo')->nullable();
            $table->string('estrategia')->nullable();
            $table->string('resultados')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('planejamento_diarios');
    }
};
