<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Guid\Guid;

class Booking extends Model
{
    /** @use HasFactory<\Database\Factories\BookingFactory> */
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'name',
        'photo',
        'check_in',
        'check_out',
        'room',
        'requests',
        'booking_date',
        'price',
        'status',
    ];

    protected $keyType = 'string'; 
    public $incrementing = false; 

    protected static function booted()
    {
        static::creating(function ($contact) {
            if (!$contact->id) {
                $contact->id = (string) Guid::uuid4(); 
            }
        });
    }

    //ONE Booking only can have ONE Room
    public function room()
    {
        return $this->belongsTo(Room::class);
    }
}
