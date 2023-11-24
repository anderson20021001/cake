<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Recheio extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'recheios';

    public function recheio(): HasOne
    {
        return $this->hasOne(Item_venda::class, 'id', 'recheio_id');
    }
}
