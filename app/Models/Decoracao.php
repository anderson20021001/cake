<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Decoracao extends Model
{
    use HasFactory;
    protected $table = 'decoracao';

    public function item_venda(): HasOne
    {
        return $this->hasOne(Item_venda::class, 'id', 'item_id');
    }
}
