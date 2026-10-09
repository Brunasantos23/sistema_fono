<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusPacienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $statusPacientes = [
            ['nome' => 'Ativo'],
            ['nome' => 'Inativo'],
            ['nome' => 'Em tratamento'],
            ['nome' => 'Aguardando avaliação'],
            ['nome' => 'Encaminhado para outro profissional'],
            ['nome' => 'Aguardando retorno'],
            ['nome' => 'Em acompanhamento'],
            ['nome' => 'Finalizado'],


        ];

        foreach ($statusPacientes as $statusPaciente) {
            \App\Models\StatusPaciente::create($statusPaciente);
        }
    }
}
