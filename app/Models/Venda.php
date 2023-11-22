<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Venda extends Model
{
    use HasFactory;

    protected $table = 'vendas';

    public function cliente(): HasOne
    {
        return $this->hasOne(Cliente::class, 'id', 'cliente_id');
    }
    public function item_venda(): HasOne
    {
        return $this->hasOne(Item_venda::class, 'venda_id', 'id');
    }

}