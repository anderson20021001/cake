<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
class Recheio extends Model
{
    use HasFactory;

    protected $table = 'recheio';

    public function recheio(): HasOne
    {
        return $this->hasOne(Item_venda::class, 'id', 'recheio_id');
    }
}
