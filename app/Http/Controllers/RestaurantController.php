<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function index() {
        return view('restaurants.index');
    }

    public function register() {
        return view('restaurants.register');
    }

    public function reservation() {
        return view('restaurants.reservation');
    }
}

