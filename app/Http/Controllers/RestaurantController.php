<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function index() {
        $restaurants = Restaurant::orderBy('name', 'asc')->paginate(10);

        return view('restaurants.index', ['restaurants' => $restaurants]);
    }

    public function register() {
        return view('restaurants.register');
    }

    public function reservation() {
        return view('restaurants.reservation');
    }
}

