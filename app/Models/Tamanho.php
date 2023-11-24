<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tamanho extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'tamanhos';

    public function tamanho(): HasOne
    {
        return $this->hasOne(Item_venda::class, 'id', 'tamanho_id');
    }

}
