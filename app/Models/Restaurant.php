<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{

    protected $fillable = ['name', 'address', 'type', 'maximum_capacity', 'description'];

    /** @use HasFactory<\Database\Factories\RestaurantFactory> */
    use HasFactory;

    public function reviews() {
        return $this->hasMany(Review::class);
    }

    public const TYPES = [
        'Italian',
        'Japanese',
        'Brazilian',
        'Chinese',
        'Mexican',
        'Vegetarian',
        'Fast Food',
        'Burger',
        'Steakhouse',
        'Arabic',
    ];
}
