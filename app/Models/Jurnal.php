<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurnal extends Model
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
        'tanggalterbit',
        'jenis',
        'keterangan',
        'abstrak',
        'hak',
        'view_count',
        'like_count',
        'like_status',
    ];
}
