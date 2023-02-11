<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use App\Models\Item;
use App\Models\Office;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Item>
 */
class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = \App\Models\Item::class;

    public function definition()
    {
        return [
            'office_id' => function () {
                return \App\Models\Office::factory()->create()->id;
            },
            'name' => $this->faker->word,
            'description' => $this->faker->sentence,
            'value' => $this->faker->numberBetween(100, 1000),
            'status' => $this->faker->randomElement(['Active', 'Inactive']),
            'date_acquired' => $this->faker->date()
        ];
    }
}
