<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;


class AuthController extends Controller
{
    function login()
    {
        return view('auth.login.index');
    }

    function loginProcess(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // Periksa apakah email terdaftar
    $user = User::where('email', $request->email)->first();
    if (!$user) {
        return back()->with('danger', 'Login gagal, Email tidak terdaftar');
    }

    // Autentikasi pengguna dengan kredensial (email dan password)
    if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
        return redirect('Dashboard')->with('success', 'Login Berhasil');
    } else {
        return back()->with('danger', 'Login gagal, Silakan cek email dan password anda');
    }
}

    function logout()
    {
        Auth::logout();
        return redirect('LandingPage');
    }

    function forgotPassword()
    {
        return view('auth.login.index');
    }


    function register()
    {
        return view('auth.register.index');
    }

    function createAcount(Request $request)
    {

        Session::flash('username', $request->username);
        Session::flash('email', $request->email);

        $request->validate([
            'username' => 'required|unique:user',
            'email' => 'required|email|unique:user',
            'password' => 'required|min:8',
        ], [
            'username.required' => 'Username Wajib Diisi',
            'username.unique' => 'Username Sudah Digunakan',
            'email.required' => 'Email Wajib Diisi',
            'email.email' => 'Masukkan Email Yang Valid',
            'email.unique' => 'Email Sudah Pernah Digunakan',
            'password.required' => 'Password Wajib Diisi',
            'password.min' => 'Minimum Password 8 Karakter',
        ]);



        // $role = 'admin';

        $data = [
            // 'role' => $role,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ];
        User::create($data);
        return redirect('Login')->with('success', 'Register Berhasil');
    }
}
