<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'project_category_id', 'link', 'description', 'order', 'status', 'image'
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
            $oldFile = public_path('upload/images/' . $this->attributes['image']);
            if (File::exists($oldFile)) {
                File::delete($oldFile);
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

    /**
     * Get proejct category.
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(ProjectCategory::class, 'project_category_id');
    }
}
