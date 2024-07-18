<?php

namespace App\Http\Controllers;

use App\Models\Wisata;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function home()
    {
        $topDestinasi = Wisata::limit(3)->where('favorit', 1)->inRandomOrder()->get();
        return view('pages.homepage', compact('topDestinasi'));
    }

    public function destinasi()
    {
        return view('pages.destinasi');
    }

    public function tentang()
    {
        return view('pages.tentang-kami');
    }
    public function detail($id) {

        $detail = Wisata::with('gallery', 'sarana')->find($id);

        // dd($detail);

        return view('pages.detail', compact('detail'));
    }
    
}
