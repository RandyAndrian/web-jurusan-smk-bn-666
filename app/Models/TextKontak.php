<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TextKontak extends Model
{
    use HasFactory;

    protected $table = 'text_kontak';

    protected $fillable = [
        'title', 'desk'
    ];

    protected $hidden = [];
}
