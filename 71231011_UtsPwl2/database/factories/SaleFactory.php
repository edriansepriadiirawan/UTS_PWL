<?php

namespace Database\Factories;

use App\Models\Customer;
use App\Models\Item;
use App\Models\Sale;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sale>
 */
class SaleFactory extends Factory
{
    protected $model = Sale::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'date_of_purchase' => fake()->dateTimeBetween('-1 year', 'now')->format('Y-m-d'),
            'customer_id' => Customer::inRandomOrder()->first()?->customer_id ?? Customer::factory(),
            'item_code' => Item::inRandomOrder()->first()?->item_code ?? Item::factory(),
        ];
    }
}
