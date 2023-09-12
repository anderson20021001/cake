<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Item_venda extends Model
{
    use HasFactory;
    protected $table = 'item_venda';

    public function cobertura(): HasOne
    {
        return $this->hasOne(Cobertura::class, 'id', 'cobertura_id');
    }
    public function recheio(): HasOne
    {
        return $this->hasOne(Recheio::class, 'id', 'recheio_id');
    }
    public function massa(): HasOne
    {
        return $this->hasOne(Massa::class, 'id', 'massa_id');
    }
    
}
