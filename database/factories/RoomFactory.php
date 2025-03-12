<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Room>
 */
class RoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id' => fake()->unique()->numberBetween(2, 1000),
            'name' => fake()->name(),
            'photo' => fake()->unique()->randomElement(['assets/imgs/room-img1.jpg', 'assets/imgs/room-img2.jpg', 'assets/imgs/room-img3.jpg', 'assets/imgs/room-img4.jpg', 'assets/imgs/room-img5.jpg', 'assets/imgs/room-img6.jpg']),
            'bed_type' => fake()->randomElement(['Minimal Duplex Room', 'Single Room', 'Suite', 'Double Room', 'Cabana Room', 'Luxury Double Bed', 'Penthouse Suite']),
            'room_number' => fake()->numberBetween(100, 400),
            'facilities' => fake()->unique()->randomElement([
                'Our cozy and compact rooms are perfect for travelers who need a comfortable space to rest. Featuring a cozy bed, modern amenities, and a functional layout, this room offers everything you need for a peaceful stay without unnecessary space.',
                'This small yet efficient room is designed for those who value simplicity and comfort. With a comfortable bed, essential furnishings, and a clean, bright ambiance, its the perfect choice for guests who are always on the go.',
                'Our compact rooms offer the perfect blend of comfort and convenience. Despite the smaller size, you will find everything you need, from a plush bed to essential amenities, ensuring a pleasant stay.',
                'Enjoy a functional and inviting space in our smaller rooms, designed with everything you need for a restful night. These rooms are ideal for solo travelers or couples who appreciate a practical, no-frills approach to lodging.',
                'This charming room may be small in size, but it’s big on comfort and style. It features a snug bed, a stylish design, and all the essential amenities for a pleasant and affordable stay.',
                'Ideal for short stays, this small room maximizes space and comfort. With thoughtful touches, a comfortable bed, and practical amenities, it’s a great option for those who need a simple, no-hassle stay.',
            ]),
            'price' => fake()->numberBetween(500, 2000),
            'status' => fake()->randomElement(['Booked', 'Avaliable'])
        ];
    }
}
