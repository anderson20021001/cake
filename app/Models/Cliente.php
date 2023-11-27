<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cliente extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'clientes';

    public function vendas(): HasMany
    {
        return $this->hasMany(Venda::class, 'cliente_id', 'id');
    }
}
