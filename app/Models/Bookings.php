<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'room_id', 'check_in_date', 'check_out_date', 'status'];

    // Relación: Una reserva pertenece a un usuario
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relación: Una reserva pertenece a una habitación
    public function room()
    {
        return $this->belongsTo(Room::class);
    }
}
