<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'nama',
        'deskripsi',
        'pendidikan1',
        'pendidikan2',
        'pendidikan3',
        'alamat',
        'whatsapp',
        'file_path',
    ];
}
