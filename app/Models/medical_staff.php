<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class medical_staff extends Model
{
    use HasFactory;

    protected $table = '_medical_staffs_tabel';

    protected $fillable = [
        'name',
        'specialty',
        'bio',
        'image',
    ];
}
