<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'bookName' => $this->faker->words(2, true),     // Ví dụ: "Advanced Web"
            'bookCode' => strtoupper($this->faker->bothify('??#####')), // Ví dụ: "AW12345"
            'bookAuthor' => $this->faker->name(),           // Tên tác giả giả
        ];
    }
}