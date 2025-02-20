<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room; // Importa el modelo Room

class HomeController extends Controller
{
    public function index()
    {
        $rooms = Room::all(); // Ahora podrás obtener las habitaciones
        return view('miranda.home', compact('rooms'));
    }
}
