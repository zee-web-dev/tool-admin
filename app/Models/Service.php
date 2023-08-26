<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'image', 'description', 'status'
    ];


    /**
     * Set the image.
     */
    public function setImageAttribute($image)
    {
        if ($image) {
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
