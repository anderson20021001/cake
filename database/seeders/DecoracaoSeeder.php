<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DecoracaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('decoracoes')->insert([
            'nome' => 'personalizado',
            'valor' => 0,  
        ]);

        DB::table('decoracoes')->insert([
            'nome' => 'Frutas',
            'valor' => 0,  
        ]);
    }
}
