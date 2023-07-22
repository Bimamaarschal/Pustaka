<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LikeHistory extends Model
{
    protected $table = 'like_histories';

    protected $fillable = [
        'user_id',
        'blog_id',
    ];

    public function tulisblog()
    {
        return $this->belongsTo(Tulisblog::class, 'blog_id');
    }
}
