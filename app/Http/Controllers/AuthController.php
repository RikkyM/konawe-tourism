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
            'email' => 'required|email|exists:users,email',
            'password' => 'required|min:6'
        ], [
            'email.required' => 'Email perlu diisi',
            'email.exists' => 'Email tidak ditemukan',
            'email.email' => 'Harus bertipe Email',
            'password.required' => 'Password perlu diisi',
            'password.min' => 'Password minimal 6 karakter'
        ]);
        
        $user = User::where('email', $req->email)->first();
        if ($user && Hash::check($req->password, $user->password)) {
            Auth::attempt(['email' => $req->email, 'password' => $req->password]);
            return redirect()->route('dashboard');
        }

        return redirect()->back()->withErrors(['password' => 'Password salah']);
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('homepage');
    }
}
