<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    public function activity_images()
    {
        return $this->hasMany(ActivityImage::class);
    }
    // Define the one-to-many relationship with Comment
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
