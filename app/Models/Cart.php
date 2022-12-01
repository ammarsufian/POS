<?php

namespace App\Models;

use Database\Factories\CartFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Cart extends Model
{
    use HasFactory;

    protected static function newFactory()
    {
        return CartFactory::new();
    }

    public function items(): HasMany
    {
        return $this->hasMany(CartItem::class);
    }
}
