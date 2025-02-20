@extends('layouts.app')

@section('content')
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold text-center mb-6">Nuestras Habitaciones</h1>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @foreach($rooms as $room)
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="https://via.placeholder.com/300x200" alt="Room image" class="w-full h-48 object-cover">
                    
                    <div class="p-4">
                        <h2 class="text-xl font-semibold">{{ $room->name }}</h2>
                        <p class="text-gray-500">{{ $room->type }}</p>
                        <p class="text-gray-700 mt-2">Capacidad: {{ $room->capacity }} personas</p>
                        <p class="text-green-600 mt-2 text-xl">€ {{ number_format($room->price, 2) }} por noche</p>
                    </div>

                    <div class="p-4 bg-gray-100 text-center">
                        <a href="{{ route('rooms.show', $room->id) }}" class="text-blue-500 hover:underline">Ver más detalles</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
