<?php

namespace Database\Factories;

use App\Models\Company;
use App\Models\Item;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Item>
 */
class ItemFactory extends Factory
{
    protected $model = Item::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'item_code' => 'ITM-' . fake()->unique()->numerify('#####'),
            'item' => fake()->words(2, true),
            'unit_price' => fake()->randomFloat(2, 10, 500),
            'company_id' => Company::inRandomOrder()->first()?->company_id ?? Company::factory(),
        ];
    }
}
