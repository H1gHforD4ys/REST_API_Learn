<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Customer;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name_customer' => fake()->firstName(),
            'phone_customer' => fake()->phoneNumber(),
            'address_customer' => fake()->address(),
            'email_customer' => fake()->unique()->safeEmail(),
            'city_customer' => fake()->city()
        ];
    }
}
