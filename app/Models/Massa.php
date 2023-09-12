<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Massa extends Model
{
    use HasFactory;

    protected $table = 'massa';

    public function massa(): HasOne
    {
        return $this->hasOne(Item_venda::class, 'id', 'massa_id');
    }

    
}
