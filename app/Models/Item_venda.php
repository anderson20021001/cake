<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Item_venda extends Model
{
    use HasFactory;
    protected $table = 'itens_vendas';

    public function cobertura(): HasOne
    {
        return $this->hasOne(Cobertura::class, 'id', 'cobertura_id');
    }
    public function tipo(): HasOne
    {
        return $this->hasOne(Tipo::class, 'id', 'tipo_id');
    }
    
    public function recheio(): HasOne
    {
        return $this->hasOne(Recheio::class, 'id', 'recheio_id');
    }
    public function massa(): HasOne
    {
        return $this->hasOne(Massa::class, 'id', 'massa_id');
    }
    public function decoracao(): HasOne
    {
        return $this->hasOne(Decoracao::class, 'id', 'decoracao_id');
    }
    public function tamanho(): HasOne
    {
        return $this->hasOne(Tamanho::class, 'id', 'tamanho_id');
    }
    public function venda(): HasOne
    {
        return $this->hasOne(Venda::class, 'id', 'venda_id');
    }
}
