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
            'nome' => 'Anderson',
            'email' => 'anderson@gmail.com',
            'endereco' => 'Rua Beija Flor',
            'celular' => '9999999999',
            
        ]);
    }
}
