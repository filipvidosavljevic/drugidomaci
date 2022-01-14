<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BankFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->company,
            'headquaters' => $this->faker->address,
            'email' => $this->faker->companyEmail,
            'director' => $this->faker->name,
            "bank_category_id" => $this->faker->numberBetween(1, 5),
        ];
    }
}
