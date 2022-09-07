<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SField>
 */
class SFieldFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'code_s_field'=>$this->faker->unique()->randomElement(['B', 'V', 'F','T']),
            'id_sector'=>$this->faker-> numberBetween($min = 1, $max = 2),
            'id_activity'=>$this->faker-> numberBetween($min = 1, $max = 4),
            
        ];
    }
}
