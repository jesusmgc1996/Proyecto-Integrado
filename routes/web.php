<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\ProfessionalController;
use App\Http\Controllers\ConsultingRoomController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('index');

Route::get('legal', function () {
    return view('legal');
})->name('legal');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('appointment', AppointmentController::class)->middleware(['auth', 'verified']);

Route::get('/about', [ProfessionalController::class, 'index'])->name('about');
Route::get('/professional/{professional}', [ProfessionalController::class, 'show'])->name('professional');
Route::get('/facilities', [ConsultingRoomController::class, 'index'])->name('facilities');

require __DIR__.'/auth.php';
