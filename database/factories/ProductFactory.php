<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    protected $model = Product::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'barcode' => $this->faker->uuid,
            'price' => $this->faker->randomDigit(),
            'wholesale_price' => $this->faker->randomDigit(),
            'traders_price' => $this->faker->randomDigit(),
            'quantity' => $this->faker->randomDigit(),
            'status' => 'available',
        ];
    }
}
