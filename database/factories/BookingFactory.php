<?php

namespace Database\Factories;

use App\Models\Room;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Booking>
 */
class BookingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $checkin = fake()->dateTimeBetween('now', '+1 month');
        $checkout = fake()->dateTimeBetween($checkin, $checkin->format('Y-m-d H:i:s') . ' +7 days');
        return [
            'id' => fake()->unique()->numberBetween(1, 1000),
            'name' => fake()->name(),
            'photo' => 'https://thispersondoesnotexist.com/',
            'check_in' => $checkin,
            'check_out' => $checkout,
            'room' => Room::inRandomOrder()->value('room_number'),
            'requests' => fake()->text(),
            'booking_date' => today(),
            'price' => fake()->numberBetween(500, 2000),
            'status' => fake()->randomElement(['Pending', 'Paid', 'Refunded'])
        ];
    }
}
