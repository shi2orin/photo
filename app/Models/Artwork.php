<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artwork extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'name', 'title', 'image', 'alt', 'sns'];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
