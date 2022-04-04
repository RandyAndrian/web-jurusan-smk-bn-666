<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    use HasFactory;

     protected $table = 'jurusan';

    protected $fillable = [
      'title', 'kategori_jurusan_id', 'desk', 'gambar_profil'
    ];

    protected $hidden = [];

    public function kategori_jurusan() {
        return $this->belongsTo(KategoriJurusan::class, 'kategori_jurusan_id', 'id');
    }
}
