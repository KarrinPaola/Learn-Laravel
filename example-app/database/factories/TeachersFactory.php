<?php

namespace Database\Factories;

use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<Model>
 */
class TeachersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "name"=> $this->faker->name(),
            "email"=> $this->faker->safeEmail(),
            "password"=>$this->faker->password(),
            "phone_number"=> $this->faker->phoneNumber(),
            "date_of_birth"=>$this->faker->date("Y-m-d"),
        ];
    }
}