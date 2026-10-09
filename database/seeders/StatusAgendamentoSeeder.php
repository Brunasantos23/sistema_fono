<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusAgendamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $statusAgendamentos = [
            ['nome' => 'Agendado'],
            ['nome' => 'Confirmado'],
            ['nome' => 'Cancelado'],
            ['nome' => 'Realizado'],
        ];

        foreach ($statusAgendamentos as $status) {
            \App\Models\StatusAgendamento::create($status);
        }
    }
}
