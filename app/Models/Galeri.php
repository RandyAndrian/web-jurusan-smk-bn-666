<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Galeri extends Model
{
    use HasFactory;
     protected $table = 'galeri';

    protected $fillable = [
        'gambar_galeri', 'user_id'
    ];

    protected $hidden = [];

    public function users() {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
