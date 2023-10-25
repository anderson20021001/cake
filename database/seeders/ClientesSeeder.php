<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('clientes')->insert([
            'nomeCompleto' => 'Anderson André',
            'endereco' => 'Rua Beija Flor',
            'numero'    => '20',
            'bairro' => 'Botafogo',
            'cidade'    => 'Rio de Janeiro',
            'estado'    => 'RJ',
            'email' => 'anderson@gmail.com',
            'telefone' => '9999999999'
            
        ]);
    }
}
