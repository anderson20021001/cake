<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RecheiosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('recheios')->insert([
            'nome' => 'brigadeiro',
            'valor' => '0',
        ]);
        DB::table('recheios')->insert([
            'nome' => 'Chocolate',
            'valor' => '0',
        ]);
        DB::table('recheios')->insert([
            'nome' => 'Ninho Trufado',
            'valor' => '0',
        ]);
        DB::table('recheios')->insert([
            'nome' => 'brigadeiro',
            'valor' => '0',
        ]);
        DB::table('recheios')->insert([
            'nome' => 'Beijinho',
            'valor' => '0',
        ]);
        DB::table('recheios')->insert([
            'nome' => 'Laka com óreo',
            'valor' => '0',
        ]);
        DB::table('recheios')->insert([
            'nome' => 'Laka com óreo',
            'valor' => '0',
        ]);
        DB::table('recheios')->insert([
            'nome' => 'Frutas R$25,00',
            'valor' => '25',
        ]);
        DB::table('recheios')->insert([
            'nome' => 'Ninho Trufado',
            'valor' => '0',
        ]);
        DB::table('recheios')->insert([
            'nome' => 'Doce de Leite',
            'valor' => '0',
        ]);
        DB::table('recheios')->insert([
            'nome' => 'Limão',
            'valor' => '0',
        ]);
    }
}
