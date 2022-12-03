<?php

namespace App\Models;

use Database\Factories\ProductFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $appends = ['price_value'];

    protected static function newFactory()
    {
        return ProductFactory::new();
    }

    public function getPriceValueAttribute()
    {
        $customer = Cache::get('customer');
        $customerType = $customer->customer_type_id ?? 1;

        switch ($customerType) {
            case 2:
                return $this->wholesale_price;
            case 3:
                return $this->traders_price;
            default:
                return $this->price;
        }
    }
}
