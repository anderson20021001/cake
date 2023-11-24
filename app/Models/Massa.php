<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Massa extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'massas';

    public function massa(): HasOne
    {
        return $this->hasOne(Item_venda::class, 'id', 'massa_id');
    }

    
}
