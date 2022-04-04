<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Portfolio extends Model
{
    use HasFactory;

     protected $table = 'portfolio';

    protected $fillable = [
        'judul', 'slug', 'kategori_portfolio_id', 'user_id', 'gambar_portfolio','deskripsi'
    ];

    protected $hidden = [];

    public function kategori_portfolio() {
        return $this->belongsTo(KategoriPortfolio::class, 'kategori_portfolio_id', 'id');
    }

    public function users() {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
