<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItensVendasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('itens_vendas')->insert([
            'decoracao_id' => 1,
            'massa_id' => 1,
            'recheio_id' => 1,
            'quantidade' => 1,
            'venda_id' => 1,
            'tamanho_id' => 1,
            'cobertura_id' => 1,
            'valor' => 50,




           
        ]);
    }
}
