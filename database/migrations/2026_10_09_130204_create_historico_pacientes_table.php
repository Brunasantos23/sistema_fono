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
        Schema::create('historico_pacientes', function (Blueprint $table) {
            $table->id();
            $table->boolean('mae_medicamento')->nullable();
            $table->string('qual_medicamento')->nullable();
            $table->boolean('pais_parentes')->nullable();
            $table->boolean('uso_alcool')->nullable();
            $table->string('qual_uso')->nullable();
            $table->boolean('problema_gestacao')->nullable();
            $table->string('qual_problema')->nullable();
            $table->boolean('pre_natal')->nullable();
            $table->string('parto')->nullable();
            $table->boolean('complicacao_parto')->nullable();
            $table->text('condicoes_nascimento')->nullable();
            $table->string('meses_nascimento')->nullable();
            $table->string('peso_nascimento')->nullable();
            $table->string('estatura_nascimento')->nullable();
            $table->boolean('saiu_maternidade')->nullable();
            $table->boolean('medicamento_nascimento')->nullable();
            $table->boolean('anoxia')->nullable();
            $table->boolean('perda_auditiva')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('historico_pacientes');
    }
};
