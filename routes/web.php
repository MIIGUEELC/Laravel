<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\RoomController;
use App\Models\Room;
use Illuminate\Support\Facades\Route;

//Index
Route::get('/', function () {
    $rooms = Room::all();
    return view('hotel.index', compact('rooms'));
})->name('index');

//Offers
Route::get('/offers', function () {
    $rooms = Room::take(4)->get();
    $randomRooms = Room::inRandomOrder()->limit(3)->get();
    return view('hotel.offers', compact('rooms'), compact('randomRooms'));
})->name('offers');

//About
Route::get('/about', function () {
    return view('hotel.about');
})->name('about');

//Contact Routes
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('save-contact', [ContactController::class, 'store'])->name('create.contact');

//Room Routes
Route::get('/rooms', [RoomController::class, 'index'])->name('rooms');
Route::get('/details/{id}', [RoomController::class, 'show'])->name('details')->middleware('auth');

//Booking Routes
Route::post('/check/{room}', [BookingController::class, 'check'])->name('check');
Route::post('/createBooking/{room}', [BookingController::class, 'store'])->name('create.booking');

//Register/Login routes
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('save-user', [AuthController::class, 'store'])->name('create.user');
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login-user', [AuthController::class, 'loginStore'])->name('user.login');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
