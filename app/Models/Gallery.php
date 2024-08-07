<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    protected $fillable = ['gambar'];

    public function wisata()
    {
        return $this->belongsTo((Wisata::class));
    }
}
