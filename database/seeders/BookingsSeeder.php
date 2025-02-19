<?php

namespace Database\Seeders;

use App\Models\Bookings;
use Illuminate\Database\Seeder;

class BookingsSeeder extends Seeder
{
    public function run(): void
    {
        Bookings::factory(10)->create(); // Crea 10 reservas ficticias
    }
}
