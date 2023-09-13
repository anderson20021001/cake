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
        return $this->hasOne(cliente::class, 'id', 'cliente_id');
    }
}
