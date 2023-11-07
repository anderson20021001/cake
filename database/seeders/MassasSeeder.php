<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MassasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('massas')->insert([
            'nome' => 'Sabor Chocolate',
            'valor' => '0',
        ]);
        DB::table('massas')->insert([
            'nome' => 'Sabor Cenoura',
            'valor' => '0',
        ]);
        DB::table('massas')->insert([
            'nome' => 'Sabor Red Velt ',
            'valor' => '0',
        ]);
        DB::table('massas')->insert([
            'nome' => 'Sabor Baunilha',
            'valor' => '0',
        ]);
        DB::table('massas')->insert([
            'nome' => 'Sabor mista (Baunilha e Chocolate) R$ 30,00 ',
            'valor' => '30',
        ]);
    }
    }

