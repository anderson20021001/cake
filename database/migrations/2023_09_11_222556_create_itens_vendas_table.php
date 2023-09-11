<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('itens_vendas', function (Blueprint $table) {
            $table->id();
            $table->string("venda_id");
            $table->string("cobertura_id");
            $table->string("decoracao_id");
            $table->int("tamanho_id");
            $table->string("recheio_id");
            $table->integer("quantidade");
            $table->string("venda_id");
            $table->float("valor");


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('itens_vendas');
    }
};
