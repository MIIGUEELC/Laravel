<?php

namespace App\Http\Controllers;

use App\Models\Bookings;
use Illuminate\Http\Request;

class BookingsController extends Controller
{
    public function index()
    {
        return Bookings::all();
    }

    public function store(Request $request)
    {
        return Bookings::create($request->all());
    }
}
