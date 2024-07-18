<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wisata extends Model
{
    use HasFactory;

    protected $table = 'wisata';

    protected $fillable = ['id_kategori', 'nama_wisata', 'harga', 'deskripsi', 'latitude', 'longitude', 'gambar', 'favorit'];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori');
    }

    public function gallery()
    {
        return $this->hasMany(Gallery::class);
    }

    public function sarana()
    {
        return $this->hasMany(Sarana::class, 'id_wisata');
    }
}
