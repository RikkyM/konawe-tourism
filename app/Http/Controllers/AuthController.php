<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('pages.auth.login');
    }

    public function loginProcess(Request $req)
    {
        $req->validate([
            'email' => 'required|email',
            'password' => 'required'
        ], [
            'email.required' => 'Email perlu diisi',
            'email.email' => 'Harus bertipe Email',
            'password.required' => 'Password perlu diisi'
        ]);
        
        $user = User::where('email', $req->email)->first();
        if ($user && Hash::check($req->password, $user->password)) {
            Auth::attempt(['email' => $req->email, 'password' => $req->password]);
            return redirect()->route('dashboard');
        }
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('homepage');
    }
}
