<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $table = 'newss_tabel';

    protected $fillable = [
        'title',
        'content',
        'summary',
        'image',
        'published_at',
    ];

    protected $casts = [
        'published_at' => 'datetime',
        'image' => 'array',
    ];
}
