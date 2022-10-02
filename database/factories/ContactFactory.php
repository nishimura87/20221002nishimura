<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'fullname' => $this->faker->name,
            'gender' => rand(1, 2),
            'email' => $this->faker->email,
            'postcode' => substr($this->faker->postcode,3),
            'address' => substr($this->faker->address, 9),
            'building_name' => $this->faker->secondaryAddress,
            'opinion' => $this->faker->realText(100)
        ];
    }
}
