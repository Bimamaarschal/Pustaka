<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;


class Tulisblog extends Model
{
    use HasFactory;

     /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'image',
        'judul',
        'penulis',
        'tanggal',
        'konten1',
        'konten2',
        'view_count',
        'like_count',
        'like_status',
        
    ];

    public function hasLiked($userId)
    {
        return $this->likeHistory()->where('user_id', $userId)->exists();
    }

    public function likeHistory()
    {
        return $this->hasMany(LikeHistory::class, 'blog_id');
    }

    /**
     * image
     *
     * @return Attribute
     */
    protected function image(): Attribute
    {
        return Attribute::make(
            get: fn ($image) => asset('/storage/tulisblogs/' . $image),
        );
    }
}
