<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Plan>
 */
class PlanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Plan::class;

    public function definition()
    {
        return [
            'plan_name' => $this->faker->word,
            'code' => $this->faker->unique()->word,
        ];
    }
}