<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Venda extends Model
{
    use HasFactory;

    protected $table = 'venda';

    public function venda(): HasOne
    {
        return $this->hasOne(Item_venda::class, 'id', 'cliente_id');
    }
}
