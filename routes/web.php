<?php
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoomController;
use Illuminate\Support\Facades\Route;


Route::get('/test-activity', [ActivityController::class, 'index']);  // prueba
Route::resource('activities', ActivityController::class);// crea las rutas CRUD. aunque no se vean

// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

      // Rutas de habitaciones
        Route::resource('rooms', RoomController::class);
        Route::get('/', [HomeController::class, 'index'])->name('home');
        Route::post('/rooms/{id}/book', [BookingController::class, 'store'])->name('rooms.book');
        Route::get('/rooms', [RoomController::class, 'index'])->name('rooms') ;
        Route::get('/rooms/{id}', [RoomController::class, 'show'])->name('room-details');
        Route::get('/about', [AboutController::class, 'index'])->name('about');
        Route::get('/contact', [ContactController::class, 'index'])->name('contact');
        Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
        Route::get('/offer', [OfferController::class, 'index'])->name('offer');
 
});

require __DIR__.'/auth.php';
