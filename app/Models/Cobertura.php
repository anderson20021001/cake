<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cobertura extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $table = 'coberturas';

    public function item_venda(): HasOne
    {
        return $this->hasOne(Item_venda::class, 'id', 'item_id');
    }
}
