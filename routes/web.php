<?php

use App\Http\Controllers\RestaurantController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/restaurants', [RestaurantController::class, 'index'])->name('restaurants.index');
Route::get('/registerRestaurant', [RestaurantController::class, 'register'])->name('restaurants.register');
Route::get('/makeReservation', [RestaurantController::class, 'reservation'])->name('restaurants.reservation');