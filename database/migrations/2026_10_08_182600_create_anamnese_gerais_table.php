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
        Schema::create('anamnese_gerais', function (Blueprint $table) {
            $table->id();
            $table->text('motivo_procura')->nullable();
            $table->string('escolaridade')->nullable();
            $table->text('impressao_diagnostica')->nullable();
            $table->text('hipotese_diagnostica')->nullable();
            $table->text('obs_gerais')->nullable();
            $table->string('ano')->nullable();
            


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anamnese_gerais');
    }
};
