<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Tamanho extends Model
{
    use HasFactory;

    protected $table = 'tamanhos';

    public function tamanho(): HasOne
    {
        return $this->hasOne(Item_venda::class, 'id', 'tamanho_id');
    }

}
