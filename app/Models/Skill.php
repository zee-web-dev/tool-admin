<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'value', 'status', 'order'
    ];

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
