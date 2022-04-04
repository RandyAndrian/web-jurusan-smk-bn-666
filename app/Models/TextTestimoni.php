<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TextTestimoni extends Model
{
    use HasFactory;

    protected $table = 'text_testimoni';

    protected $fillable = [
        'title'
    ];

    protected $hidden = [];
}
