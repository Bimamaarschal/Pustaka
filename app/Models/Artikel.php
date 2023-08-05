<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Support\Str;

class Artikel extends Model
{
    use HasFactory;
    protected $primaryKey = 'id'; 
    public $incrementing = false; 
    protected $keyType = 'string'; 
    protected $fillable = [
        'id',
        'image',  
        'noartikel',
        'judul',
        'penulis',
        'email',
        'instansi',
        'tanggal',
        'jenis',
        'kataketerangan',
        'abstrak',
        'katakunci',
        'latarbelakang',
        'metode',
        'hasil',
        'pembahasan',
        'simpulan',
        'saran',
        'referensi',
        'review',
        'pdfhasil',
        'pesan',
        'komentar',
        'hukum',
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
            get: fn ($image) => asset('/storage/artikel/' . $image),
        );
    }
}
