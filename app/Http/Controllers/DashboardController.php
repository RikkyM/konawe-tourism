<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $title = 'dashboard';

        

        return view('pages/admin/dashboard', compact('title'));
    }
}
