<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AssetController extends Controller
{
    public function getDestinasiPhotos($filename)
    {
        $file = storage_path('app/public/gambar-wisata/'. $filename);
        return response()->file($file);
    }

    public function getGallery($filename)
    {
        $file = storage_path('app/public/gallery/'. $filename);
        return response()->file($file);
    }
}
