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

        // Si se pasan fechas de entrada y salida
        if ($checkIn && $checkOut) {
            $rooms = Room::whereDoesntHave('bookings', function ($query) use ($checkIn, $checkOut) {
                $query->where(function ($q) use ($checkIn, $checkOut) {
                    $q->where('check_in_date', '<', $checkOut)
                      ->where('check_out_date', '>', $checkIn);
                });
            })->get();
        } else {
            // Si no se pasan fechas, se obtienen todas las habitaciones
            $rooms = Room::all();
        }

        return view('miranda.home', compact('rooms', 'checkIn', 'checkOut')); // Aquí cambiamos a 'miranda.home'
    }

    public function show(string $id)
    {
        $room = Room::with(['bookings'])->findOrFail($id);
        $rooms = Room::all(); 

        return view('miranda.rooms.room-details', compact('room', 'rooms'));
    }
}

