<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'institute', 'link', 'location', 'from', 'to', 'description', 'order', 'status'
    ];

    /**
     * Boot method to increament in order.
     */
    protected static function booted()
    {
        static::creating(function ($project) {
            $highestOrder = static::max('order');
            $project->order = $highestOrder + 1;
        });
    }
}
