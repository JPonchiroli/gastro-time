<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{

    protected $fillable = ['author', 'review_date', 'review', 'comment', 'restaurant_id'];

    /** @use HasFactory<\Database\Factories\ReviewFactory> */
    use HasFactory;

    public function restaurant() {
        return $this->belongsTo(Restaurant::class);
    }
}
