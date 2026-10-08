<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class ParentescoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $parentescos = [
            ['nome' => 'Pai'],
            ['nome' => 'Mãe'],
            ['nome' => 'Avô'],
            ['nome' => 'Avó'],
            ['nome' => 'Tio'],
            ['nome' => 'Tia'],
            ['nome' => 'Irmão'],
            ['nome' => 'Irmã'],
        ];

        foreach ($parentescos as $parentesco) {
            \App\Models\Parentesco::create($parentesco);
        }
    }
}
