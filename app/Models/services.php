<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class services extends Model
{
    use HasFactory;

    protected $table = 'servicess_tabel';

    protected $fillable = [
        'title',
        'description',
        'details',
        'icon',
    ];
}
