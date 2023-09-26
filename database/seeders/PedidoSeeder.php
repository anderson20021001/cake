<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PedidoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        DB::table('pedidos')->insert([
            'nome' => 'Anderson',
            'email' => 'anderson@gmail.com',
            'endereco' => 'Rua Beija Flor',
        ]);
    }
}
