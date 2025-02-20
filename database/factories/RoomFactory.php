<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Room>
 */
class RoomFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => 'Room ' . $this->faker->unique()->numberBetween(100, 999),
            'type' => $this->faker->randomElement(['Single', 'Double', 'Suite', 'Deluxe']),
            'price' => $this->faker->randomFloat(2, 50, 500), // Precios entre 50 y 500
            'capacity' => $this->faker->numberBetween(1, 6), // De 1 a 6 personas
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
