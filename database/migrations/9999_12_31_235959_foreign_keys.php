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
            $table->foreignId('paciente_id')->nullable()->constrained('pacientes');
        });

        Schema::table('pacientes', function (Blueprint $table) {
            $table->foreignId('status_paciente_id')->nullable()->constrained('status_pacientes');
        });

        Schema::create('pacientes_has_profissionais', function (Blueprint $table) {
            $table->foreignId('paciente_id')->nullable()->constrained('pacientes');
            $table->foreignId('profissional_id')->nullable()->constrained('profissionais');
        });
;

        Schema::table('agendamentos', function (Blueprint $table) {
            $table->foreignId('profissional_id')->nullable()->constrained('profissionais');
            $table->foreignId('status_agendamento_id')->nullable()->constrained('status_agendamentos');
            $table->foreignId('paciente_id')->nullable()->constrained('pacientes');
        });
 
        Schema::table('recibos', function (Blueprint $table) {
            $table->foreignId('profissional_id')->nullable()->constrained('profissionais');
        });

        Schema::table('planejamento_diarios', function (Blueprint $table) {
            $table->foreignId('profissional_id')->nullable()->constrained('profissionais');
            $table->foreignId('paciente_id')->nullable()->constrained('pacientes');
        });

        Schema::table('planejamento_gerais', function (Blueprint $table) {
             $table->foreignId('profissional_id')->nullable()->constrained('profissionais');
             $table->foreignId('paciente_id')->nullable()->constrained('pacientes');
        });

        Schema::table('anamnese_gerais', function (Blueprint $table) {
            $table->foreignId('historico_paciente_id')->nullable()->constrained('historico_pacientes');
            $table->foreignId('desenvolvimento_global_id')->nullable()->constrained('desenvolvimento_globais');
            $table->foreignId('antencedente_id')->nullable()->constrained('antencedente_patologicos');
            $table->foreignId('profissional_id')->nullable()->constrained('profissionais');
            $table->foreignId('paciente_id')->nullable()->constrained('pacientes');
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
