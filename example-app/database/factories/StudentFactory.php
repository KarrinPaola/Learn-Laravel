<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            "name" => $this->faker->name(),
            "email"=> $this->faker->unique()->safeEmail(),
            "age"=> $this->faker->numberBetween(10, 25),
            "date_of_birth"=>$this->faker->date("Y-m-d"),
            "gender"=> $this->faker->randomElement(["male","female"]),
            "score"=> $this->faker->numberBetween(10,0)
        ];
    }
}
// To use this factory in the terminal, you can run the following Artisan command:
// php artisan tinker

// Then, you can create Student model instances like this:
// \App\Models\Student::factory()->count(10)->create();