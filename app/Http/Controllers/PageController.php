<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function wisata()
    {
        
        return view('pages.admin.wisata', [
            'title' => 'wisata',
            'breadcrumbs' => [
                ['name' => 'dashboard', 'url' => route('dashboard')],
                ['name' => 'wisata'],
            ]
        ]);
    }

    public function komentar()
    {
        
        return view('pages.admin.komentar', [
            'title' => 'komentar',
            'breadcrumbs' => [
                ['name' => 'dashboard', 'url' => route('dashboard')],
                ['name' => 'komentar'],
            ]
        ]);
    }
}
