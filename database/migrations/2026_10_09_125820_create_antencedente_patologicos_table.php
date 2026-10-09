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
        Schema::create('antencedente_patologicos', function (Blueprint $table) {
            $table->id();
            $table->boolean('medicamentos')->nullable();
            $table->string('quais_medicamentos')->nullable();
            $table->boolean('dor_ouvido')->nullable();
            $table->boolean('doencas_infantis')->nullable();
            $table->string('quais_doencas')->nullable();
            $table->boolean('troca_letras_fala')->nullable();
            $table->string('quais_letras_fala')->nullable();
            $table->boolean('uso_chupeta')->nullable();
            $table->boolean('tipos_alimentos')->nullable();
            $table->string('respiracao')->nullable();
            $table->boolean('troca_letras_escrita')->nullable();
            $table->string('quais_letras_escrita')->nullable();
            $table->boolean('rouca')->nullable();
            $table->text('atencao_fala')->nullable();
            $table->string('acompanhamento_profissional')->nullable();
            $table->text('agitado_desatento')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('antencedente_patologicos');
    }
};
