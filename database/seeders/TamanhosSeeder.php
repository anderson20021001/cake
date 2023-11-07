<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TamanhosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tamanhos')->insert([
            'nome' => 'Pequeno (15cm) - Serve até 15 fatias e custa R$ 90,00',
            'valor' => '90',
            
        ]);
        DB::table('tamanhos')->insert([
            'nome' => 'Médio (20cm) - Serve até 28 fatias e custa R$ 130,00',
            'valor' => '130',
            
        ]);
        DB::table('tamanhos')->insert([
            'nome' => 'Grande (25cm) - Serve até 42 fatias e custa R$ 180,00',
            'valor' => '180',
            
        ]);
        DB::table('tamanhos')->insert([
            'nome' => 'Gigante (30cm) - Serve até 56 fatias e custa R$ 215,00',
            'valor' => '215',
            
        ]);
    }
    }

