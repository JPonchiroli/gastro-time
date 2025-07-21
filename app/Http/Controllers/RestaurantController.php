<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use App\Models\Review;
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

    public function details(Restaurant $restaurant) {
        $reviews = $restaurant->reviews;

        return view('restaurants.details', compact('restaurant', 'reviews'));
    }
}

