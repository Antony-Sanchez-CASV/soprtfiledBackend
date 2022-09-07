<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\subsvcurse>
 */
class SubsvcurseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'id_vcurse'=>$this->faker-> numberBetween($min = 1, $max = 4),
            'id_user'=>$this->faker-> numberBetween($min = 2, $max = 10),
            'id_state'=>2,
        ];
    }
}
