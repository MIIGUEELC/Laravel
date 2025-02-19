<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room; 

class RoomController extends Controller
{
    /**
     * Muestra la lista de habitaciones disponibles o todas si no se proporcionan fechas.
     */
    public function index(Request $request)
    {
        $checkIn = $request->query('checkIn');
        $checkOut = $request->query('checkOut');

        if ($checkIn && $checkOut) {
            $rooms = Room::whereDoesntHave('bookings', function ($query) use ($checkIn, $checkOut) {
                $query->where(function ($q) use ($checkIn, $checkOut) {
                    $q->where('check_in_date', '<', $checkOut)
                      ->where('check_out_date', '>', $checkIn);
                });
            })->get();
        } else {
            $rooms = Room::all(); 
        }

        return view('miranda.rooms.index', compact('rooms', 'checkIn', 'checkOut'));
    }

    
    public function show(string $id)
    {
        $room = Room::with(['bookings'])->findOrFail($id);
        $rooms = Room::all();

        return view('miranda.rooms.room-details', compact('room', 'rooms'));
    }
}
