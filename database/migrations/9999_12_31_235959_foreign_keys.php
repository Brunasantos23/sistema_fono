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
        Schema::table('responsaveis', function (Blueprint $table) {
            $table->foreignId('parentesco_id')->nullable()->constrained('parentescos');
        });

        Schema::table('pacientes', function (Blueprint $table) {
            $table->foreignId('responsavel_id')->nullable()->constrained('responsaveis');
            $table->foreignId('status_paciente_id')->nullable()->constrained('status_pacientes');
        });

        Schema::create('pacientes_has_profissionais', function (Blueprint $table) {
            $table->foreignId('paciente_id')->nullable()->constrained('pacientes');
            $table->foreignId('profissional_id')->nullable()->constrained('profissionais');
        });

         Schema::create('pacientes_has_agendamentos', function (Blueprint $table) {
            $table->foreignId('paciente_id')->nullable()->constrained('pacientes');
            $table->foreignId('agendamento_id')->nullable()->constrained('agendamentos');
         });

          //    Schema::create('pacientes_has_anamneses', function (Blueprint $table) {
        //     $table->foreignId('paciente_id')->nullable()->constrained('pacientes');
        //     $table->foreignId('anamneses_id')->nullable()->constrained('anamneses');
        //     });

        Schema::table('agendamentos', function (Blueprint $table) {
            $table->foreignId('profissional_id')->nullable()->constrained('profissionais');
            $table->foreignId('status_agendamento_id')->nullable()->constrained('status_agendamentos');
        });

        Schema::create('agendamentos_has_pacientes', function (Blueprint $table) {
            $table->foreignId('paciente_id')->nullable()->constrained('pacientes');
            $table->foreignId('agendamento_id')->nullable()->constrained('agendamentos');
        });

        Schema::table('recibos', function (Blueprint $table) {
            $table->foreignId('profissional_id')->nullable()->constrained('profissionais');
        });

        Schema::table('planejamento_diarios', function (Blueprint $table) {
            $table->foreignId('profissional_id')->nullable()->constrained('profissionais');
        });

        Schema::create('planj_diarios_has_pacientes', function (Blueprint $table) {
             $table->foreignId('planejamento_diario_id')->nullable()->constrained('planejamento_diarios');
             $table->foreignId('paciente_id')->nullable()->constrained('pacientes');
        });

        Schema::table('planejamento_gerais', function (Blueprint $table) {
             $table->foreignId('profissional_id')->nullable()->constrained('profissionais');
        });

        Schema::create('planj_gerais_has_pacientes', function (Blueprint $table) {
             $table->foreignId('planejamento_geral_id')->nullable()->constrained('planejamento_gerais');
             $table->foreignId('paciente_id')->nullable()->constrained('pacientes');
        });

        Schema::table('anamnese_gerais', function (Blueprint $table) {
            $table->foreignId('historico_paciente_id')->nullable()->constrained('historico_pacientes');
            $table->foreignId('desenvolvimento_global_id')->nullable()->constrained('desenvolvimento_globais');
            $table->foreignId('antencedente_id')->nullable()->constrained('antencedente_patologicos');
            $table->foreignId('profissional_id')->nullable()->constrained('profissionais');
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
