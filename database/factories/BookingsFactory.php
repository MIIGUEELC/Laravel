<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bookings>
 */
class BookingsFactory extends Factory
{
    public function definition(): array
    {
        return [
            'user_id' => 1, // usar User::factory() para crear un usuario.
            'room_id' => 1, 
            'check_in_date' => $this->faker->date(),
            'check_out_date' => $this->faker->date(),
            'status' => $this->faker->randomElement(['pending', 'confirmed', 'cancelled'])
        ];
    }
}
