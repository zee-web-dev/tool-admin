<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'image',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    /**
     * Set password.
     */
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);
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
}
