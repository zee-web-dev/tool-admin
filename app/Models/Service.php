<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'image', 'description', 'status', 'order'
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
     * Set the image.
     */
    public function setImageAttribute($image)
    {
        if ($image) {
            if (isset($this->attributes['image'])) {
                $oldFile = public_path('upload/images/' . $this->attributes['image'] ?? '');
                if (File::exists($oldFile)) {
                    File::delete($oldFile);
                }
            }
            $name = time() . '_' . $image->getClientOriginalName();
            $image->move('upload/images/', $name);
            $this->attributes['image'] = $name;
        } else {
            unset($this->attributes['image']);
        }
    }

    /**
     * Get the image.
     */
    public function getImageAttribute($image)
    {
        return asset('/upload/images/' . $image);
    }

    /**
     * Get active records.
     */
    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }
}
