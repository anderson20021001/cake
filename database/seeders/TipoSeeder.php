<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tipos')->insert([
            'nome' => 'Bolo simples',
            'valor' => '50',
        ]);

        DB::table('tipos')->insert([
            'nome' => 'Bolo pelado (Naked)',
            'valor' => '50',
        ]);

        DB::table('tipos')->insert([
            'nome' => 'Bolo com cobertura (Chantininho)',
            'valor' => '50',
        ]);
    }
}
