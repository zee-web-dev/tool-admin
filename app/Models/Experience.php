<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'company', 'link', 'location', 'from', 'to', 'description', 'order', 'status'
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

    /**
     * Get active records.
     */
    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }
}
