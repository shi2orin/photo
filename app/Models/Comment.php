<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'user_id', 'comment', 'artwork_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function commentUser($user_id)
    {
        return User::where('id', $user_id)->first();
    }

    public function artwork()
    {
        return $this->belongsTo(Artwork::class);
    }
}
