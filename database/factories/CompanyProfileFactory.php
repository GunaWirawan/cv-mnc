<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'          => $this->faker->company(),
            'description'   => $this->faker->paragraph(5),
            'email'         => $this->faker->email(),
            'phone_1'       => $this->faker->phoneNumber(),
            'phone_2'       => '-',
            'phone_3'       => '-',
            'address'       => htmlspecialchars($this->faker->streetAddress() . '\n' . $this->faker->city() . ',' . $this->faker->state() . '\n' . $this->faker->postcode()),
            'path_logo'     => '/img/bootstrap-solid.svg',
        ];
    }
}
