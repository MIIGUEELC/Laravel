<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'type', 'price', 'capacity'];

    // Relación: Una habitación tiene muchas reservas
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
