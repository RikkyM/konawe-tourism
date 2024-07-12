<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Wisata;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $title = 'dashboard';

        $wisata = Wisata::count();
        $kategori = Kategori::count();

        return view('pages/admin/dashboard', compact('title', 'wisata', 'kategori'));
    }
}
