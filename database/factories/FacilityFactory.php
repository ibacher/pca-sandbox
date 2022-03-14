<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<\App\Models\Facility>
 */
class FacilityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->company(),
            'address_line_1' => $this->faker->streetAddress(),
            'municipality' => $this->faker->city(),
            'country' => $this->faker->country(),
            'postal_code' => $this->faker->postcode()
        ];
    }
}
